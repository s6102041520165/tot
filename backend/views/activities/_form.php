<?php

use dosamigos\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Activities */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="activities-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(CKEditor::class, [
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

    ])  ?>

    <?= $form->field($imageFiles, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
