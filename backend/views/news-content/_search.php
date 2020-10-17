<?php

use backend\models\NewsType;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NewsContentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-content-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <div class="row">
        <div class="col-lg-2">
            <?= $form->field($model, 'id') ?>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'title') ?>
        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'news_type_id')->dropDownList(ArrayHelper::map(NewsType::find()->all(), 'id', 'name_type'), ['prompt' => '===== ค้นหาตามประเภทข่าว =====']); ?>
        </div>
        <div class="col-lg-12">
            <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <?= Html::submitButton('ค้นหา', ['class' => 'btn btn-primary']) ?>
                <?= Html::resetButton('ล้าง', ['class' => 'btn btn-warning']) ?>
            </div>
        </div>
    </div>


    <?php // echo $form->field($model, 'created_by') 
    ?>

    <?php // echo $form->field($model, 'created_at') 
    ?>

    <?php // echo $form->field($model, 'updated_by') 
    ?>

    <?php // echo $form->field($model, 'updated_at') 
    ?>

    <?php // echo $form->field($model, 'news_type_id') 
    ?>


    <?php ActiveForm::end(); ?>

</div>