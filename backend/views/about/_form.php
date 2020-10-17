<?php

use dosamigos\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\About */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($imageFile, 'imageFile')->fileInput()->label('รูปภาพ')?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->widget(CKEditor::class, [
        'options' => ['rows' => 6],
        'preset' => 'full',
        'clientOptions' => [
            'filebrowserUploadUrl' => Url::to(['/site/upload']),
            /* 'toolbarGroups' => [
                ['name' => 'undo'],
                [
                    'name' => 'basicstyles',
                    'groups' => ['basicstyles', 'cleanup']
                ],
                ['name' => 'colors'],
                ['name' => 'links', 'groups' => ['links', 'insert']],
                ['name' => 'others', 'groups' => ['others', 'about']],
            ], */
        ],

    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('บันทึก', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
