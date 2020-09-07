<?php

use backend\models\Profile;

if (isset(Yii::$app->user->id)) {
    $profileId = (!empty(Yii::$app->user->identity->profile_id)) ? Yii::$app->user->identity->profile_id : null;
    $profileImage = (!is_null($profileId)) ? Profile::findOne($profileId)->picture : "uploads/images/nopic.png";
}
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?= \yii\helpers\Html::img(Yii::$app->urlManagerFrontend->getBaseUrl(). "/".  $profileImage, ['class' => 'img-circle', 'alt' => 'User Image']) ?>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->profile_id ? Profile::findOne(Yii::$app->user->id)->f_name . " " . Profile::findOne(Yii::$app->user->id)->l_name : "ไม่ได้เข้าสู่ระบบ" ?></p>
                <p><?= $sourcePath ?></p>

                <a href="#"><i class="fa fa-circle text-green"></i> ออนไลน์</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="ค้นหา..." />
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => 'เมนู', 'options' => ['class' => 'header']],
                    ['label' => 'แดชบอร์ด', 'icon' => 'dashboard', 'url' => ['/']],
                    [
                        'label' => 'ข่าวสาร',
                        'icon' => 'newspaper-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'หมวดหมู่', 'icon' => 'circle', 'url' => ['/news-type'],],
                            ['label' => 'ข่าวสาร', 'icon' => 'circle', 'url' => ['/news-content'],],
                        ]
                    ],
                    [
                        'label' => 'ผู้ใช้งานระบบ',
                        'icon' => 'user',
                        'url' => '#',
                        'items' => [
                            ['label' => 'จัดการสิทธิ์', 'icon' => 'circle', 'url' => ['/auth-item']],
                            ['label' => 'ผู้ใช้งานระบบ', 'icon' => 'circle', 'url' => ['/user']],
                        ]
                    ],
                    //['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],

                ],
            ]
        ) ?>

    </section>

</aside>