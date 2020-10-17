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

        $guest = $auth->createRole('guest');
        $admin = $auth->createRole('admin');


        /**============================= Created Permission============================== */
        // add "addActivity" permission
        $addActivity = $auth->createPermission('addActivity');
        $addActivity->description = 'เพิ่มกิจกรรม';
        $auth->add($addActivity);

        // view "viewActivity" permission
        $viewActivity = $auth->createPermission('viewActivity');
        $viewActivity->description = 'ดูกิจกรรม';
        $auth->add($viewActivity);

        // view "deleteActivity" permission
        $deleteActivity = $auth->createPermission('deleteActivity');
        $deleteActivity->description = 'ลบกิจกรรม';
        $auth->add($deleteActivity);

        // add "updateActivity" permission
        $updateActivity = $auth->createPermission('updateActivity');
        $updateActivity->description = 'แก้ไขกิจกรรม';
        $auth->add($updateActivity);

        /**==========================Created NewsType Permission ==============================*/

        // add "creatNewsType" permission
        $creatNewsType = $auth->createPermission('addNewsType');
        $creatNewsType->description = 'เพิ่มประเภทข่าวสาร';
        $auth->add($creatNewsType);

        // view "viewNewsType" permission
        $viewNewsType = $auth->createPermission('viewNewsType');
        $viewNewsType->description = 'ดูประเภทข่าวสาร';
        $auth->add($viewNewsType);

        // view "deleteNewsType" permission
        $deleteNewsType = $auth->createPermission('deleteNewsType');
        $deleteNewsType->description = 'ลบประเภทข่าวสาร';
        $auth->add($deleteNewsType);

        // add "updateNewsType" permission
        $updateNewsType = $auth->createPermission('updateNewsType');
        $updateNewsType->description = 'แก้ไขประเภทข่าวสาร';
        $auth->add($updateNewsType);

        /*========================= Created News Content Permission ============================= */
        // add "addNewsContent" permission
        $addNewsContent = $auth->createPermission('addNewsContent');
        $addNewsContent->description = 'เพิ่มกิจกรรม';
        $auth->add($addNewsContent);

        // view "viewNewsContent" permission
        $viewNewsContent = $auth->createPermission('viewNewsContent');
        $viewNewsContent->description = 'ดูข่าวสาร';
        $auth->add($viewNewsContent);

        // view "deleteNewsContent" permission
        $deleteNewsContent = $auth->createPermission('deleteNewsContent');
        $deleteNewsContent->description = 'ลบข่าวสาร';
        $auth->add($deleteNewsContent);

        // add "updateNewsContent" permission
        $updateNewsContent = $auth->createPermission('updateNewsContent');
        $updateNewsContent->description = 'แก้ไขข่าวสาร';
        $auth->add($updateNewsContent);

        /*==================== Added Permission to Guest User ================================= */
        // add "author" role and give this role the "addActivity" permission
        $auth->add($guest);
        $auth->addChild($guest, $viewActivity);
        $auth->addChild($guest, $viewNewsType);
        $auth->addChild($guest, $viewNewsContent);

        // as well as the permissions of the "guest" role
        $auth->add($admin);


        //Admin give this role to create post, update post and remove post
        /*============================ Activity =================================== */
        $auth->addChild($admin, $updateActivity);
        $auth->addChild($admin, $addActivity);
        $auth->addChild($admin, $deleteActivity);
        /*=========================================================================== */




        /**=========================== News Type ==================================== */
        $auth->addChild($admin, $updateNewsType);
        $auth->addChild($admin, $creatNewsType);
        $auth->addChild($admin, $deleteNewsType);
        /*==========================================================================*/



         /**=========================== News Content ==================================== */
         $auth->addChild($admin, $updateNewsContent);
        $auth->addChild($admin, $addNewsContent);
        $auth->addChild($admin, $deleteNewsContent);
         /*==========================================================================*/
 




        /*==================== Created Admin to same Guest Permission =============================*/
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
