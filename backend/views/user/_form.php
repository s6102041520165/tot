<?php

use backend\models\AuthItem;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $roles = ArrayHelper::map(Yii::$app->authManager->getPermissions(), 'name', 'description') ?>
    <?php $getPermissionByUser = Yii::$app->authManager->getPermissionsByUser(Yii::$app->user->identity->id) ?>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status')->textInput() ?>
    <?= $form->field($model, 'roles')->widget(Select2::class, [
        'data' => $roles,
        'options' => [
            'placeholder' => 'กรุณาเลือกสิทธิ',
            'multiple' => true,
        ],
    ]) ?>
    <div class="form-group">
        <?= Html::submitButton('บันทึก', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>