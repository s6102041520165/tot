<?php

namespace frontend\controllers;

use frontend\models\User;
use phpDocumentor\Reflection\Types\Integer;
use Yii;
use yii\web\NotFoundHttpException;

class UserController extends \yii\web\Controller
{
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->goBack();
        }
        return $this->render('update',['model' => $model]);
    }

    public function findModel($id)
    {
        $model = User::findOne($id);
        if(!$model){
            throw new NotFoundHttpException('ไม่พบหน้าที่คุณร้องขอ');
        }
        return $model;
    }

}
