<?php

/* @var $this yii\web\View */

use frontend\models\About;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;

$this->title = 'เกี่ยวกับ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-index">
    <?php Pjax::begin(); ?>

    <div class="col-lg-12">


        <div class="panel-body">
            <?php
            $dataProvider = new ActiveDataProvider([
                'query' => About::find(),
            ]);
            ?>

            <?=
                ListView::widget([
                    'dataProvider' => $dataProvider,
                    'options' => ['class' => 'img-container'],
                    'itemOptions' => ['class' => 'item-thumbnail'],
                    'itemView' => function ($model, $key, $index, $widget) {
                        $imageUrl = Yii::getAlias('@web') . $model->thumbnail;
                        $overlayImage = "<div class=\"overlay\">
                                            <div class=\"text\">
                                                {$model->name}
                                            </div>
                                        </div>";
                        //Html::a(Html::img($imageUrl,['class' => 'img']), ['view-about', 'id' => $model->id])
                        return Html::a(Html::img($imageUrl, ['class' => 'image']) . $overlayImage, ['view', 'id' => $model->id]);
                    },
                    'layout' => '{items}'
                ])
            ?>
        </div>
    </div>


    <?php Pjax::end(); ?>
    <?php $css = <<<CSS
    .img-container{
        display:flex;
        flex-wrap: wrap;
        justify-content: space-around;
        flex-direction: row;
    }
    .item-thumbnail {
        max-width:500px;
        margin: 10px;
        position: relative;
    }


    .image {
        display: block;
        width: 100%;
        height: auto;
        border-radius:5px;
    }

    .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: gray;
        overflow: hidden;
        width: 100%;
        height: 80px;
        transition: .5s ease;
        opacity:0.8;
    }

    .item-thumbnail:hover .overlay {
        height: 100%;
    }

    .text {
        white-space: nowrap; 
        color: white;
        font-size: 20px;
        position: absolute;
        overflow: hidden;
        text-overflow: ellipsis;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
    }
        
    CSS;
    ?>
    <?php $this->registerCss($css); ?>
</div>