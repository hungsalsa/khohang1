<?php

namespace backend\modules\auth\controllers;

use Yii;
use common\modules\auth\models\AuthItem;
use common\modules\auth\models\AuthItemSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RbacController implements the CRUD actions for AuthItem model.
 */
class RbacController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all AuthItem models.
     * @return mixed
     */

    // user assigment
    public function actionAssigment()
    {
        $auth = Yii::$app->authManager;
        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        $author = $auth->createRole('author');
        $admin = $auth->createRole('admin');

        $auth->assign($author, 3);
        $auth->assign($admin, 2);
    }

    // Create Role
    public function actionCreate_role()
    {
        $auth = Yii::$app->authManager;
        // Author -> index/create/view
        // Admin -> {Author} and update/delete

        $index = $auth->createPermission('stock/product/index');
        $create = $auth->createPermission('stock/product/create');
        $view = $auth->createPermission('stock/product/view');

        $update = $auth->createPermission('stock/product/update');
        $delete = $auth->createPermission('stock/product/delete');

        // add "author" role and give this role the "createPost" permission
        $author = $auth->createRole('author');
        $auth->add($author);
        $auth->addChild($author, $index);
        $auth->addChild($author, $create);
        $auth->addChild($author, $view);

        // add "admin" role and give this role the "updatePost" permission
        // as well as the permissions of the "author" role
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $author);
        $auth->addChild($admin, $update);
        $auth->addChild($admin, $delete);
    }

    // Create permission
    public function actionCreate_permission()
    {
        $auth = Yii::$app->authManager;

        // add "createPost" permission
        $index = $auth->createPermission('stock/product/index');
        $index->description = 'Create a post';
        $auth->add($index);

        // add "updatePost" permission
        $create = $auth->createPermission('stock/product/create');
        $create->description = 'create post';
        $auth->add($create);

        // add "updatePost" permission
        $view = $auth->createPermission('stock/product/view');
        $view->description = 'views post';
        $auth->add($view);

        // add "updatePost" permission
        $update = $auth->createPermission('stock/product/update');
        $update->description = 'Update post';
        $auth->add($update);

        // add "delete" permission
        $delete = $auth->createPermission('stock/product/delete');
        $delete->description = 'delete post';
        $auth->add($delete);
    }
    public function actionIndex()
    {
        $searchModel = new AuthItemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AuthItem model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AuthItem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AuthItem();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->name]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing AuthItem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->name]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AuthItem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AuthItem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return AuthItem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AuthItem::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionSignup()
{
    if ($this->validate()) {
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->save(false);

        // the following three lines were added:
        $auth = \Yii::$app->authManager;
        $authorRole = $auth->getRole('author');
        $auth->assign($authorRole, $user->getId());

        return $user;
    }

    return null;
}
}
