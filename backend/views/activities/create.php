<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Activities */

$this->title = 'เพิ่มกิจกรรม';
$this->params['breadcrumbs'][] = ['label' => 'กิจกรรม', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="activities-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
