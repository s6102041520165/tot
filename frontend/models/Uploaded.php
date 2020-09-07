<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class Uploaded extends Model
{
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }
    
    public function upload()
    {
        $file_name = time();
        if ($this->validate()) {
            $this->imageFile->saveAs('@frontend/web/uploads/images/profile/' . $file_name . '.' . $this->imageFile->extension);
            return '/uploads/images/profile/' . $file_name . '.' . $this->imageFile->extension;
        } else {
            return false;
        }
    }
}
