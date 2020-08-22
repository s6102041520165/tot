<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NewsType */

$this->title = 'เพิ่มหมวดหมู่ข่าวสาร';
$this->params['breadcrumbs'][] = ['label' => 'หมวดหมู่ข่าวสาร', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-type-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
