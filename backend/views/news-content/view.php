<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\NewsContent */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'ข่าวสาร', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="news-content-view">

    <p>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'banner:ntext',
            [
                'attribute' => 'content',
                'format' => 'raw'
            ],
            [
                'attribute' => 'created_by',
                'value' => function ($model) {
                    return $model->creator['username'];
                }
            ],
            'created_at:relativeTime',
            [
                'attribute' => 'updated_by',
                'value' => function ($model) {
                    return $model->editor['username'];
                }
            ],
            'updated_at:relativeTime',
            [
                'attribute' => 'news_type_id',
                'value' => function ($model) {
                    return $model->newsType['name_type'];
                },
            ],
        ],
    ]) ?>

</div>