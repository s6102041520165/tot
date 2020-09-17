<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\NewsTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'หน้าแรก';

?>
<div class="news-type-index">

    <?php Pjax::begin(); ?>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class'=>'panel panel-info animate'],
        'itemView' => '_item_news'
    ]) ?>

    <?php Pjax::end(); ?>

</div>
