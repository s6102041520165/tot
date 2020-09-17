<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Sign In';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>
<style>
    .login-box {
        position: relative;
        top: -800px;
        -webkit-animation: slide 0.5s forwards;
        -webkit-animation-delay: 0.1s;
        animation: slide 0.5s forwards;
        animation-delay: 0.1s;
        border-radius: 20px;
        padding: 5px;
        background-color: whitesmoke;
        box-shadow: 0px 5px 12px #ccc;
    }
    .login-box-body{
        background-color: transparent;
    }

    @keyframes slide {
        100% {
            left: 0px;
            top: 0px;
        }
    }
</style>
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>BackYard </b>TOT</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">

        <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

        <?= $form
            ->field($model, 'username', $fieldOptions1)
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

        <?= $form
            ->field($model, 'password', $fieldOptions2)
            ->label(false)
            ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

        <div class="row">
            <div class="col-xs-8">
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <?= Html::submitButton('เข้าสู่ระบบ', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
            </div>
            <!-- /.col -->
        </div>


        <?php ActiveForm::end(); ?>



        <?= Html::a('ลืมรหัสใช่ไหม? คลิกเลย', Yii::$app->urlManagerFrontend->createUrl(['site/request-password-reset']), $options = []) ?><br>

    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->