<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'แก้ไขข้อมูลส่วนตัว';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">

    <div class="panel panel-default">
        <div class="panel-body">
            <?php //echo $model->picture
            ?>
            <?php if (isset($model->picture)) : ?>
                <div class="flex-container">
                    <img src="<?= Yii::getAlias('@web/') . $model->picture; ?>" alt="" class="avatar" />
                </div>
            <?php endif; ?>
            <?php $form = ActiveForm::begin(['id' => 'update-profile']); ?>

            <div class="row">
                <div class="col-lg-6">
                    <?= $form->field($model, 'f_name'); ?>
                </div>

                <div class="col-lg-6">
                    <?= $form->field($model, 'l_name'); ?>
                </div>

                <div class="col-lg-12">
                    <?= $form->field($imageFile, 'imageFile')->fileInput() ?>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <?= Html::submitButton('แก้ไขข้อมูลส่วนตัว', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>
                </div>
            </div>


            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<?php 
$css = <<<CSS
    .flex-container{
        display:flex;
        justify-content:center;
    }
    .avatar {
        vertical-align: middle;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        margin: 20px;
    }
CSS;
?>
<?= $this->registerCss($css) ?>