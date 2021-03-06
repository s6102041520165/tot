<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        *,
        p,
        table,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: kanit;
        }
    </style>
</head>

<body>
    <?php $this->beginBody() ?>

    <div id="wrapContent">
        <?php
        NavBar::begin([
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'id' => 'navbar'
            ],
        ]);
        $menuItems = [
            ['label' => 'หน้าแรก', 'url' => ['/site/index']],
            ['label' => 'เกี่ยวกับ', 'url' => ['/about']],
            ['label' => 'กิจกรรม', 'url' => ['/activities']],
            ['label' => 'ติดต่อเรา', 'url' => ['/site/contact']],
        ];
        if (Yii::$app->user->isGuest) {
            $menuItems[] = ['label' => 'ลงทะเบียน', 'url' => ['/site/signup']];
            $menuItems[] = ['label' => 'เข้าสู่ระบบ', 'url' => ['/site/login']];
        } else {
            /* $menuItems[] = '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-danger logout']
                )
                . Html::endForm()
                . '</li>'; */
            $menuItems[] = [
                'label' => Yii::$app->user->identity->username,
                'items' => [
                    ['label' => 'แก้ไขข้อมูลส่วนตัว', 'url' => ['/site/update-profile']],
                    '<li class="divider"></li>',
                    [
                        'label' => 'ออกจากระบบ', 'url' => ['/site/logout'],
                        'linkOptions' => ['data-method' => 'post']
                    ],
                ],
            ];
        }
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems,
        ]);
        NavBar::end();
        ?>

        <div class="banner" id="banner">
            <div>
                <h1>TOT</h1>
                <h2>พัทลุง</h2>
            </div>

        </div>
        <div class="container">

            <div class="row">
                <div class="col-lg-3">
                    <?= $this->render('left'); ?>
                </div>
                <div class="col-lg-9 animate-right">

                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <?= Alert::widget() ?>
                    <?= $content ?>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

            <p class="pull-right">จัดทำโดยใคร <?= Html::a('BackYard', Yii::$app->urlManagerBackend->createUrl(['site/index']), $options = []) ?></p>
        </div>
    </footer>
    <script>
        window.onscroll = function() {
            scrollFunction()
        };


        function scrollFunction() {
            let banner = document.getElementById('banner');
            let navbar = document.getElementById('navbar');
            let wrap = document.getElementById('wrapContent');
            if (window.scrollY > banner.clientHeight) {
                navbar.className = 'bg-blue navbar-fixed-top';
                wrap.style.className = 'wrap';
               
            } else {
                navbar.className = 'bg-transparent navbar-fixed-top';
                wrap.style.className = 'wrap';
            }
        }
    </script>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>