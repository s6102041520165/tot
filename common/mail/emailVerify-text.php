<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$verifyLink = Yii::$app->urlManager->createAbsoluteUrl(['site/verify-email', 'token' => $user->verification_token]);
?>
สวัสดี <?= $user->username ?>,

ต้องการยืนยันอีเมลใช่หรือไม่, ลองกดลิงค์ด้านล่าง:

<?= $verifyLink ?>
