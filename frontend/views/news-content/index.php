<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\NewsContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ข่าวสาร';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-content-index animate-right">

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            //'created_at',
            //'updated_by',
            //'updated_at',
            //'news_type_id',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}'
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>