<?php

use dosamigos\ckeditor\CKEditor;
use frontend\models\NewsType;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NewsContent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-content-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($imageFile, 'imageFile')->fileInput(['label' => 'แบนเนอร์']) ?>

    <?= $form->field($model, 'content')->widget(CKEditor::class, [
        'options' => ['rows' => 6],
        'preset' => 'full',
        'clientOptions' => [
            'filebrowserUploadUrl' => Url::to(['/site/upload']),
            'toolbarGroups' => [
                ['name' => 'undo'],
                [
                    'name' => 'basicstyles',
                    'groups' => ['basicstyles', 'cleanup']
                ],
                ['name' => 'colors'],
                ['name' => 'links', 'groups' => ['links', 'insert']],
                ['name' => 'others', 'groups' => ['others', 'about']],
            ],
        ],

    ]) ?>

    <?php
    $typeItem = ArrayHelper::map(NewsType::find()->all(), 'id', 'name_type');
    ?>

    <?= $form->field($model, 'news_type_id')->dropDownList($typeItem, ['prompt' => 'กรุณาเลือกประเภทข่าว']) ?>

    <div class="form-group">
        <?= Html::submitButton('บันทึก', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>