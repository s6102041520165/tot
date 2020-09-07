<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'ลงทะเบียน';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>กรุณาป้อนข้อมูลทุกฟิลด์เพื่อเข้าสู่ระบบ</p>

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'confirm_password')->passwordInput() ?>
            <hr />
            <div class="row">
                <div class="col-lg-6">
                    <?= $form->field($model, 'f_name'); ?>
                </div>

                <div class="col-lg-6">
                    <?= $form->field($model, 'l_name'); ?>
                </div>

                <div class="col-lg-12">
                    <?= $form->field($model, 'picture')->fileInput() ?>
                </div>
            </div>

            <div class="form-group">
                <?= Html::submitButton('ลงทะเบียน', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>