<?php 
namespace console\controllers;

use Yii;
use yii\console\Controller;

/**
 * summary
 */
class RbacController extends Controller
{
    /**
     * summary
     */
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        // add "createPost" permission
        // $createPost = $auth->createPermission('create-post');
        // $createPost->description = 'Create a post';
        // $auth->add($createPost);

// add "indexPost" permission
        // $indexPost = $auth->createPermission('indexPost');
        // $indexPost->description = 'Create a post';
        // $auth->add($indexPost);

        // add "updatePost" permission
        // $updatePost = $auth->createPermission('updatePost');
        // $updatePost->description = 'Sửa nhà cung cấp';
        // $auth->add($updatePost);

        // // view "updatePost" permission
        // $viewPost = $auth->createPermission('viewPost');
        // $viewPost->description = 'Xem danh sách nhà cung cấp';
        // $auth->add($viewPost);

        // // delete "updatePost" permission
        // $deletePost = $auth->createPermission('deletePost');
        // $deletePost->description = 'Xóa danh sách nhà cung cấp';
        // $auth->add($deletePost);

        // add "author" role and give this role the "createPost" permission
        // $author = $auth->createRole('author');
        // $auth->add($author);
        // $auth->addChild($author, $createPost);

        // // add "admin" role and give this role the "updatePost" permission
        // // as well as the permissions of the "author" role
        // $admin = $auth->createRole('admin');
        // $auth->add($admin);
        // $auth->addChild($admin, $updatePost);
        // $auth->addChild($admin, $author);

        // // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // // usually implemented in your User model.
        // $auth->assign($author, 2);
        // $auth->assign($admin, 1);

        // add "createPost" permission
        // $postManager = $auth->createRole('manager-post');
        // $auth->add($postManager);

        // Them permission
  //       $createPost = $auth->createPermission('create-post');

  //       $indexPost = $auth->createPermission('indexPost');

  //       $updatePost = $auth->createPermission('updatePost');

  //       $viewPost = $auth->createPermission('viewPost');

  //       $deletePost = $auth->createPermission('deletePost');

		// $postManager = $auth->createRole('manager-post');

  //       $auth->addChild($postManager, $indexPost);
  //       $auth->addChild($postManager, $updatePost);
  //       $auth->addChild($postManager, $createPost);
  //       $auth->addChild($postManager, $viewPost);
  //       $auth->addChild($postManager, $deletePost);

        // Them quyen quan ly nguoi dung

        // $indexUser = $auth->createPermission('index-user');
        // $indexUser->description = 'Xem danh sach nguoi dung';
        // $auth->add($indexUser);

        // $postManager = $auth->createRole('manager-post');
        $userManager = $auth->createRole('manager-user');
        // $auth->add($userManager);

        // $admin = $auth->createRole('admin');
        // $auth->add($admin);

        // Gan quyen
        // cho usermanager
         // $auth->addChild($userManager, $indexUser);
         // $auth->addChild($admin, $indexUser);
         // $auth->addChild($admin, $postManager);


         // Gan quyen cho nguoi dung
         // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        // $auth->assign($postManager, 3);
        // $auth->assign($userManager, 4);
        // $auth->assign($admin, 2);


// them permission
        $indexGroup = $auth->createPermission('index-group');
        $indexGroup->description = 'Xem danh sach nhom';
        // $auth->add($indexGroup);

// add "indexGroup" permission
        // $indexGroup = $auth->createRole('group-index');
        // $auth->add($indexGroup);


        $groupManager = $auth->createRole('manager-group');
        // $auth->add($groupManager);

        $auth->addChild($userManager, $groupManager);
        
        $auth->assign($userManager, 4);
        // $auth->assign($admin, 2);
    }
}
 ?>