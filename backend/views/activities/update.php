<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Activities */

$this->title = 'แก้ไขกิจกรรม: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'กิจกรรม', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="activities-update">


    <?= $this->render('_form', [
        'model' => $model,
        'imageFiles' => $imageFiles
    ]) ?>

</div>
