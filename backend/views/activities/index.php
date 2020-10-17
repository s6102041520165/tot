<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ActivitiesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'กิจกรรม';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="activities-index">

    <p>
        <?= Html::a('เพิ่มกิจกรรม', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            //'gallery:ntext',
            'created_at:relativeTime',
            //'updated_at',
            //'created_by',
            //'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
