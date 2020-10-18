<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;
use common\models\Profile;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $confirm_password;
    public $f_name;
    public $l_name;
    public $picture;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'มีชื่อผู้ใช้อยู่แล้ว กรุณาลองชื่ออื่น'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            [['f_name','l_name'], 'required'], 
            [['f_name', 'l_name'], 'string', 'max' => 100],
            [['picture'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'มีคนใช้อีเมลนี้แล้ว'],

            ['password', 'required'],
            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],
            ['confirm_password', 'compare', 'compareAttribute' => 'password', 'skipOnEmpty' => false, 'message' => "รหัสผ่านไม่ตรงกัน"],
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $profile_id = $this->createProfile();
        $user->profile_id = $profile_id;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        $user->save();

        // the following three lines were added:
        $auth = \Yii::$app->authManager;
        $authorRole = $auth->getRole('guest');
        $auth->assign($authorRole, $user->getId());


        return $this->sendEmail($user);
    }

    public function createProfile()
    {
        $profile = new Profile();
        $profile->setAttribute('f_name', $this->f_name);
        $profile->setAttribute('l_name', $this->l_name);
        $pictureName = $this->upload();
        $profile->setAttribute('picture', $pictureName);
        $profile->save();
        return $profile->id;
    }

    public function upload()
    {
        if ($this->validate()) {
            $randomImage = time();
            $this->picture->saveAs('@webroot/uploads/images/profile/' . $randomImage . '.' . $this->picture->extension);
            return "uploads/images/profile/" . $randomImage . '.' . $this->picture->extension;
        } else {
            return false;
        }
    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('การสมัครบัญชี ' . Yii::$app->name)
            ->send();
    }
    public function attributeLabels()
    {
        return [
            'username' => 'ชื่อผู้ใช้',
            'password' => 'รหัสผ่าน',
            'email' => 'อีเมล',
            'confirm_password' => 'ยืนยันรหัสผ่าน',
            'f_name' => 'ชื่อ',
            'l_name' => 'นามสกุล',
            'picture' => 'รูปโปรไฟล์',
        ];
    }
}
