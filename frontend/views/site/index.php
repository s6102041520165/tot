<?php

use frontend\models\Activities;
use yii\data\ActiveDataProvider;
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
    <?php //echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'panel panel-info'],
        'itemView' => '_item_news',
        'layout' => '{items}'
    ]) ?>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    <h4>ภาพกิจกรรม</h4>
                </div>

                <div class="panel-body">
                    <?php
                    $dataProvider = new ActiveDataProvider([
                        'query' => Activities::find(),
                    ]);
                    ?>

                    <?=
                        ListView::widget([
                            'dataProvider' => $dataProvider,
                            'options' => ['class' => 'list-group'],
                            'itemOptions' => ['class' => 'list-group-item'],
                            'itemView' => function ($model, $key, $index, $widget) {
                                return Html::a($model->title, ['/activities/view', 'id' => $model->id]);
                            },
                            'layout' => '<div>{items}</div>'
                        ])
                    ?>
                </div>
            </div>
        </div>
    </div>


    <?php Pjax::end(); ?>

</div>