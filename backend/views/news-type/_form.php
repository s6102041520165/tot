<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NewsType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_type')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'mode')->dropDownList([0 => 'แสดง', 1 => 'ร่าง'], ['prompt' => 'โหมด']) ?>
    <div class="form-group">
        <?= Html::submitButton('บันทึก', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>