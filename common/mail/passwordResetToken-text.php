<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
สวัสดี <?= $user->username ?>,

ต้องการเปลี่ยนรหัสผ่านใช่หรือไม่, ลองกดลิงค์ด้านล่างสิ

<?= $resetLink ?>
