<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AboutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Abouts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-index">
 
    <p>
        <?= Html::a('เพิ่มข้อมูลเกี่ยวกับ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'thumbnail',
                'format' => 'raw',
                'value' => function ($data) {
                    $imageUrl = Yii::$app->urlManagerFrontend->getBaseUrl().$data->thumbnail;
                    return "<img src='{$imageUrl}' style=\"max-width:200px\" />";
                }
            ],
            'name',
            [
                'attribute' => 'created_by',
                'value' => function ($data) {
                    return $data->createdBy['username'];
                }
            ],
            //'updated_by',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>