<?php

namespace backend\models;

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
            $this->imageFile->saveAs('@frontend/web/uploads/images/' . $file_name . '.' . $this->imageFile->extension);
            return '/uploads/images/' . $file_name . '.' . $this->imageFile->extension;
        } else {
            return false;
        }
    }
}
