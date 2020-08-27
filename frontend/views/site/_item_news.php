<?php

use frontend\models\NewsContent;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\widgets\ListView;

?>
<div class="panel-heading text-center">
    <h4><?= $model->name_type ?></h4>
</div>
<div class="panel-body">
    <?php
    $dataProvider = new ActiveDataProvider([
        'query' => NewsContent::find()->where(['=', 'news_type_id', $model->id]),
        'pagination' => [
            'pageSize' => 10,
        ],
    ]);
    ?>

    <?=
        ListView::widget([
            'dataProvider' => $dataProvider,
            'options' => ['class' => 'list-group'],
            'itemOptions' => ['class'=>'list-group-item'],
            'itemView' => function ($model, $key, $index, $widget) {
                return Html::a($model->title, ['/site/view', 'id' => $model->id]);
            }
        ])
    ?>
</div>