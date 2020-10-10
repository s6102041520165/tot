<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Activities */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'กิจกรรม', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="activities-view">


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
            'title',
            'description:ntext',
            [
                'attribute' => 'gallery',
                'format' => 'raw',
                'value' => function ($data) {
                    $images = explode(",", $data->gallery);
                    $appendHtml = null;
                    
                    $imagePath = Yii::$app->urlManagerFrontend->getBaseUrl();
                    foreach ($images as $image) {
                        $appendHtml .= "<img style='max-width:500px;' src='{$imagePath}{$image}' class='thumbnail'/>";
                    }
                    return "<div style='display:flex;flex-wrap:wrap;justify-content:space-between'>".$appendHtml."</div>";
                }
            ],
            'created_at:relativeTime',
            'updated_at:relativeTime',
            [
                'attribute' => 'created_by',
                'value' => function ($data) {
                    return $data->createdBy['username'];
                },
            ],
            [
                'attribute' => 'updated_by',
                'value' => function ($data) {
                    return $data->updatedBy['username'];
                },
            ],
        ],
    ]) ?>

</div>