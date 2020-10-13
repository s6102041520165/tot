<?php 

namespace backend\models;

use common\models\User as ModelsUser;

class User extends ModelsUser
{
    public $roles;

    public function rules()
    {
        return [
            ['roles', 'safe'],
        ];
    }

    public function attributeLabels(){
        return [
            'roles' => 'สิทธิการใช้งาน',
            'status' => 'สถานะ'
        ];
    }
    
}
