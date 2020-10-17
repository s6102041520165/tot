<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\About */

$this->title = 'แก้ไขข้อมูล: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'เกี่ยวกับ', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="about-update">

    <?= $this->render('_form', [
        'model' => $model,
        'imageFile' => $imageFile,
    ]) ?>

</div>
