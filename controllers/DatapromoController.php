<?php

namespace app\controllers;

use app\models\Datapromo;
use app\models\DatapromoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;

use yii\web\UploadedFile;

/**
 * DatapromoController implements the CRUD actions for Datapromo model.
 */
class DatapromoController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Datapromo models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DatapromoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Datapromo model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Datapromo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Datapromo();

        if ($model->load(Yii::$app->request->post())) {
            $model->gambar1 = UploadedFile::getInstance($model, 'gambar1');
            $model->gambar2 = UploadedFile::getInstance($model, 'gambar2');
            $model->gambar3 = UploadedFile::getInstance($model, 'gambar3');
    
         
    
            if ($model->save()) {
                if ($model->gambar1) {
                    $model->gambar1->saveAs('build/assets/db/datapromo/' . $model->gambar1->baseName . '.' . $model->gambar1->extension);
                }
                if ($model->gambar2) {
                    $model->gambar2->saveAs('build/assets/db/datapromo/' . $model->gambar2->baseName . '.' . $model->gambar2->extension);
                }
                if ($model->gambar3) {
                    $model->gambar3->saveAs('build/assets/db/datapromo/' . $model->gambar3->baseName . '.' . $model->gambar3->extension);
                }
                return $this->redirect(['index',]);
            }
        } else {
            $model->loadDefaultValues();
        }
    
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Datapromo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Datapromo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Datapromo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Datapromo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Datapromo::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
