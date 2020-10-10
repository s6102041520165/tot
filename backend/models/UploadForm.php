<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile[]
     */
    public $imageFiles;

    public function rules()
    {
        return [
            [['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 4],
        ];
    }

    public function upload()
    {
        //var_dump($this->imageFiles); 
        $imagesName = array();
        if ($this->validate()) {
            $couter = 0;
            foreach ($this->imageFiles as $file) {
                $couter++;
                $timestamp = time();
                $file->saveAs('@frontend/web/uploads/images/activities/ac-' . $timestamp . '-' . $couter . '.' . $file->extension);
                array_push($imagesName, "/uploads/images/activities/ac-" . $timestamp  . '-' . $couter . '.' . $file->extension);
            }
            $mergePic = implode(",", $imagesName);
            //var_dump($imagesName);die();
            /*  echo $mergePic;die(); */
            return $mergePic;
        } else {
            return false;
        }
    }

    public function attributeLabels()
    {
        return [
            'imageFiles' => 'รูปภาพ'
        ];
    }
}
