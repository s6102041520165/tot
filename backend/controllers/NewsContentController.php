<?php

namespace backend\controllers;

use Yii;
use backend\models\NewsContent;
use backend\models\NewsContentSearch;
use backend\models\Uploaded;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * NewsContentController implements the CRUD actions for NewsContent model.
 */
class NewsContentController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all NewsContent models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsContentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NewsContent model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new NewsContent model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NewsContent();
        $imageFile = new Uploaded();

        if ($model->load(Yii::$app->request->post()) && $imageFile->load(Yii::$app->request->post())) {
            $imageFile->imageFile = UploadedFile::getInstance($imageFile, 'imageFile');
            if ($imageFile->imageFile) {
                $getFileName = $imageFile->upload("news-content");
                if ($getFileName != false) {
                    $model->banner = $getFileName;
                }
            }

            if ($model->save())
                return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'imageFile' => $imageFile,
        ]);
    }

    /**
     * Updates an existing NewsContent model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $imageFile = new Uploaded();

        if ($model->load(Yii::$app->request->post()) &&  $imageFile->load(Yii::$app->request->post())) {
            $imageFile->imageFile = UploadedFile::getInstance($imageFile, 'imageFile');
            if ($imageFile->imageFile){
                $getFileName = $imageFile->upload("news-content");
                if ($getFileName != false) {
                    $model->banner = $getFileName;
                }
            }

            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'imageFile' => $imageFile,
        ]);
    }

    /**
     * Deletes an existing NewsContent model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NewsContent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return NewsContent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = NewsContent::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('ไม่สามารถเข้าถึงหน้าที่คุณร้องขอได้');
    }
}
