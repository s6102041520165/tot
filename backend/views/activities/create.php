<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Activities */

$this->title = 'เพิ่มกิจกรรม';
$this->params['breadcrumbs'][] = ['label' => 'กิจกรรม', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="activities-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
