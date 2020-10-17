<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\About */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Abouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="about-view">

    <p>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'คุณแน่ใจหรือไม่ที่จะลบรายการนี้',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'thumbnail',
                'format' => 'raw',
                'value' => function ($data) {
                    $imageUrl = Yii::$app->urlManagerFrontend->getBaseUrl() . "/" . $data->thumbnail;
                    return "<img src=\"$imageUrl\" style=\"max-width:300px\"/>";
                }
            ],
            'name',
            'content:html',
            [
                'attribute' => 'created_by',
                'value' => function ($data) {
                    return $data->createdBy['username'];
                }
            ],
            [
                'attribute' => 'updated_by',
                'value' => function ($data) {
                    return $data->updatedBy['username'];
                }
            ],
            'created_at:relativeTime',
            'updated_at:relativeTime',
        ],
    ]) ?>

</div>