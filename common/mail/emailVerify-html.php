<?php

use yii\helpers\Html;
use yii\bootstrap\Button;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $user common\models\User */

$verifyLink = Yii::$app->urlManager->createAbsoluteUrl(['site/verify-email', 'token' => $user->verification_token]);
?>
<div class="verify-email">
    <p>สวัสดี <?= Html::encode($user->username) ?>,</p>

    <p>ต้องการยืนยันอีเมลใช่หรือไม่ กดปุ่มนี้สิ</p>
    <?= Html::a('ยืนยันลิงค์', $verifyLink, ['class' => 'btn btn-primary']) ?>
</div>