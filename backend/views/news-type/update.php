<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NewsType */

$this->title = 'Update หมวดหมู่ข่าวสาร: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'หมวดหมู่ข่าวสาร', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="news-type-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
