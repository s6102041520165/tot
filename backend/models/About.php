<?php
namespace backend\models;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

class About extends \common\models\About
{
    public function behaviors()
    {
        return [
            BlameableBehavior::class,
            TimestampBehavior::class
        ];
    }
}
