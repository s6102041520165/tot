<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\NewsContent */

$this->title = 'Create News Content';
$this->params['breadcrumbs'][] = ['label' => 'News Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-content-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
