<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Activities */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'กิจกรรม', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
$images = explode(",", $model->gallery);
?>

<div class="activities-view animate-right">

    <h1><?= Html::encode($this->title) ?></h1>
    <p class="justify">
    <?=$model->description?>
    </p>
    <hr>
    <div id="lightgallery">
        <?php foreach ($images as $image):?>
            <a href="<?=Yii::getAlias('@web').$image?>">
                <img class="thumbnail" src="<?=Yii::getAlias('@web').$image?>" />
            </a>
        <?php endforeach; ?>
    </div>

    <?php 
    $script = <<<JS
        lightGallery(document.getElementById('lightgallery'));
    JS;
    $css = ' 
        .thumbnail{
            float: left;
            max-width:400px;
            margin: 5px;
        }
        .justify{
            text-align: justify;
            text-indent: 5rem;
        }
    ';
    $this->registerCss($css);
    $this->registerJsFile('@web/dist/js/lightgallery.min.js');
    $this->registerJsFile('@web/dist/js/lg-thumbnail.min.js');
    $this->registerJsFile('@web/dist/js/lg-fullscreen.min.js');
    $this->registerCssFile('@web/dist/css/lightgallery.css');
    $this->registerJs(
        $script,
        \yii\web\View::POS_READY,
        'images-gallery'
    );
    ?>

</div>
