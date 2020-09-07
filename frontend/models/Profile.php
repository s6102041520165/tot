<?php

namespace frontend\models;

use common\models\Profile as ModelsProfile;
use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property int $id
 * @property string $f_name
 * @property string $l_name
 * @property string|null $picture
 *
 * @property User[] $users
 */
class Profile extends ModelsProfile
{
    
}
