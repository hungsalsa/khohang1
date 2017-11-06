<?php

namespace backend\modules\manager\controllers;

use Yii;
use backend\modules\manager\models\Product;
use backend\modules\manager\models\Suppliers;
use backend\modules\manager\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
           'access' => [
                'class' => AccessControl::className(),
                // 'only' => ['create', 'update'],
                'rules' => [
                    // deny all POST requests
                    // [
                    //     'allow' => true,
                    //     'verbs' => ['POST']
                    // ],
                    // allow authenticated users
                    [
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action){
                            $module = Yii::$app->controller->module->id;
                            $action = Yii::$app->controller->action->id;
                            $controller = Yii::$app->controller->id;
                            $route = "$module/$controller/$action";

                            $post =  Yii::$app->request->post();
                            if (\Yii::$app->user->can($route)) {
                                // create post
                                return true;
                            }
                        }
                    ],
                    // everything else is denied
                ],
            ],
        ];
    }

    /**
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        // $module = Yii::$app->controller->module->id;
        //                     $action = Yii::$app->controller->action->id;
        //                     $controller = Yii::$app->controller->id;
        //                     $route = "$module/$controller/$action";

        //                     echo  $route;die;
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();

        $suplier = new Suppliers();
        $allSupliers = ArrayHelper::map($suplier->getAllSuppliers(),'suppID','companyName');
        // echo '<pre>';print_r($allSupliers);die;

        $model->created_at = date('Y-m-d');
        $model->updated_at = date('Y-m-d');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idPro]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'allSupliers' => $allSupliers,
            ]);
        }
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

         $suplier = new Suppliers();
        $allSupliers = ArrayHelper::map($suplier->getAllSuppliers(),'suppID','companyName');
        // echo '<pre>';print_r($allSupliers);die;

        $model->updated_at = date('Y-m-d');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idPro]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'allSupliers' => $allSupliers,
            ]);
        }
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
