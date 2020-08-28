<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\NewsContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ข่าวสาร';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-content-index">


    <p>
        <?= Html::a('เพิ่มข่าวสาร', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'content:ntext',
            //'created_by',
            //'created_at',
            //'updated_by',
            //'updated_at',
            //'news_type_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
