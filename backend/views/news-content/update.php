<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NewsContent */

$this->title = 'Update ข่าวสาร: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'ข่าวสารs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="news-content-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
