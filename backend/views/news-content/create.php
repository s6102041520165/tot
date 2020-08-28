<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NewsContent */

$this->title = 'เพิ่มข่าวสาร';
$this->params['breadcrumbs'][] = ['label' => 'ข่าวสาร', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-content-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
