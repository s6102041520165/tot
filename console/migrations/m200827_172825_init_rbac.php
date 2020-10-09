<?php

use yii\db\Migration;

/**
 * Class m200827_172825_init_rbac
 */
class m200827_172825_init_rbac extends Migration
{
    public function up()
    {
        $auth = Yii::$app->authManager;

        // add "createPost" permission
        $createPost = $auth->createPermission('createPost');
        $createPost->description = 'สร้างโพสต์';
        $auth->add($createPost);

        // view "viewPost" permission
        $viewPost = $auth->createPermission('viewPost');
        $viewPost->description = 'ดูโพสต์';
        $auth->add($viewPost);

        // view "deletePost" permission
        $deletePost = $auth->createPermission('deletePost');
        $deletePost->description = 'ลบโพสต์';
        $auth->add($deletePost);

        // add "updatePost" permission
        $updatePost = $auth->createPermission('updatePost');
        $updatePost->description = 'แก้ไขโพสต์';
        $auth->add($updatePost);

        // add "author" role and give this role the "createPost" permission
        $guest = $auth->createRole('guest');
        $auth->add($guest);
        $auth->addChild($guest, $viewPost);

        // add "admin" role and give this role the "updatePost" permission
        // as well as the permissions of the "guest" role
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        //Admin give this role to create post, update post and remove post
        $auth->addChild($admin, $updatePost);
        $auth->addChild($admin, $createPost);
        $auth->addChild($admin, $deletePost);
        $auth->addChild($admin, $guest);

        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        $auth->assign($admin, 1);
    }
    
    public function down()
    {
        $auth = Yii::$app->authManager;

        $auth->removeAll();
    }
}
