<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\About */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'เกี่ยวกับ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="about-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $model->content ?>

</div>
