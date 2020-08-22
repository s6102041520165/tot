<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\NewsTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'หมวดหมู่ข่าวสาร';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-type-index">

    <p>
        <?= Html::a('เพิ่มหมวดหมู่ข่าวสาร', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name_type',
            'created_at:relativeTime',
            'updated_at:relativeTime',
            [
                'attribute' => 'mode',
                'filter' => Html::activeDropDownList($searchModel, 'mode', [0 => 'แสดง', 1 => 'ร่าง'], ['prompt' => 'ทั้งหมด','class'=> 'form-control']),
                'value' => function($data){
                    return $data->mode === 0 ? "แสดง" : "ร่าง"; 
                }
            ],
            //'created_by',
            //'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>