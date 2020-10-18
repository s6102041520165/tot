<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\NewsType */

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="news-type-view animate-right">

    <h1><?= Html::encode($this->title) ?></h1>
    <h4>ผู้โพสต์ : <?= $model->creator['username'] ?></h4>
    <p><span class="badge badge" style="background-color:yellowgreen;">เผยแพร่เมื่อ : <?= Yii::$app->formatter->asRelativeTime($model->created_at) ?></span></p>
    <hr/>
    <p><?= $model->content ?></p>


</div>