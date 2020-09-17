<?php

namespace backend\theme\assets;


/**
 * Main backend application asset bundle.
 */
class FontAsset extends \backend\assets\AppAsset
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        '//fonts.googleapis.com/css2?family=Kanit:wght@400&display=swap'
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
