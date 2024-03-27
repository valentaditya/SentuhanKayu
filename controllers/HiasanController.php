<?php

namespace app\controllers;

use app\models\Hiasan;
use app\models\HiasanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use Yii;

use yii\web\UploadedFile;

/**
 * HiasanController implements the CRUD actions for Hiasan model.
 */
class HiasanController extends Controller
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
     * Lists all Hiasan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new HiasanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Hiasan model.
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
     * Creates a new Hiasan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Hiasan();

        if ($model->load(Yii::$app->request->post())) {
            $model->gambar1 = UploadedFile::getInstance($model, 'gambar1');
            $model->gambar2 = UploadedFile::getInstance($model, 'gambar2');
            $model->gambar3 = UploadedFile::getInstance($model, 'gambar3');
    
         
    
            if ($model->save()) {
                if ($model->gambar1) {
                    $model->gambar1->saveAs('build/assets/db/hiasan/' . $model->gambar1->baseName . '.' . $model->gambar1->extension);
                }
                if ($model->gambar2) {
                    $model->gambar2->saveAs('build/assets/db/hiasan/' . $model->gambar2->baseName . '.' . $model->gambar2->extension);
                }
                if ($model->gambar3) {
                    $model->gambar3->saveAs('build/assets/db/hiasan/' . $model->gambar3->baseName . '.' . $model->gambar3->extension);
                }
                return $this->redirect(['index',]);
            }
        } else {
            $model->loadDefaultValues();
        }
    
        return $this->render('create', [
            'model' => $model,
        ]);;
    }

    /**
     * Updates an existing Hiasan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['index',]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Hiasan model.
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
     * Finds the Hiasan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Hiasan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Hiasan::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
