<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\NewsType */

$this->title = $model->name_type;
$this->params['breadcrumbs'][] = ['label' => 'หมวดหมู่ข่าวสาร', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="news-type-view">

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
            'name_type',
            'created_at:relativeTime',
            'updated_at:relativeTime',
            'created_by',
            'updated_by',
            [
                'attribute' => 'mode',
                'value' => function ($data) {
                    return $data->mode === 0 ? "แสดง" : "ร่าง";
                }
            ]
        ],
    ]) ?>

</div>