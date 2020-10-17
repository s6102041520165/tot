<?php

namespace backend\models;

use phpDocumentor\Reflection\Types\String_;
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
    /**
    > $location is retrieve directory
     */
    public function upload(String $location)
    {
        $file_name = time();
        if ($this->validate()) {
            $this->imageFile->saveAs("@frontend/web/uploads/images/{$location}/" . $file_name . '.' . $this->imageFile->extension);
            return "/uploads/images/{$location}/" . $file_name . '.' . $this->imageFile->extension;
        } else {
            return false;
        }
    }
}
