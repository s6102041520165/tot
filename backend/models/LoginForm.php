<?php 
namespace backend\models;

use Yii;

class LoginForm extends \common\models\LoginForm
{
    public $role;
     /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            [['rememberMe', 'role'], 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validateAssignment'],
        ];
    }

    public function validateAssignment($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            $this->role = Yii::$app->authManager-> getAssignment('admin',$user->id);
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');
            }
            if (!$this->role){
                $this->addError($attribute, 'ไม่มีสิทธิเข้าใช้งานระบบ');
            }
        }
    }



}
