<?php

namespace app\controllers;

use app\models\Promo;
use app\models\PromoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;

use yii\web\UploadedFile;


/**
 * PromoController implements the CRUD actions for Promo model.
 */
class PromoController extends Controller
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
                'access' => [
                    'class' => \yii\filters\AccessControl::class,
                    'only' => ['index', 'create', 'view' , 'delete'],
                    'rules' => [
                        [
                            // 'actions' => ['index'],
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Promo models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PromoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Promo model.
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
     * Creates a new Promo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Promo();

        if ($model->load(Yii::$app->request->post())) {
            $model->gambar = UploadedFile::getInstance($model, 'gambar');
            if ($model->save()) {
                if ($model->gambar) {
                    $model->gambar->saveAs('build/assets/db/promo/' . $model->gambar->baseName . '.' . $model->gambar->extension);
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
     * Updates an existing Promo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    // public function actionUpdate($id)
    // {
    //     $model = $this->findModel($id);

    //     if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id]);
    //     }

    //     return $this->render('update', [
    //         'model' => $model,
    //     ]);
    // }

    public function actionUpdate($id)
{
    $model = $this->findModel($id);

    // Simpan gambar lama untuk digunakan kembali jika tidak ada gambar baru yang diunggah
    $oldImage = $model->gambar;

    if ($this->request->isPost && $model->load($this->request->post())) {
        $model->gambar = UploadedFile::getInstance($model, 'gambar');

        // Cek apakah ada gambar baru yang diunggah
        if ($model->gambar) {
            // Hapus gambar lama jika ada
            if ($oldImage) {
                unlink(Yii::getAlias('@webroot') . '/build/assets/db/' . $oldImage);
            }
            // Simpan gambar baru
            $model->gambar->SaveAs('build/assets/db/' . $model->gambar->baseName . '.' . $model->gambar->extension);
        } else {
           
            $model->gambar = $oldImage;
        }

        if ($model->save()) {
            return $this->redirect(['index',]);
        }
    }

    return $this->render('update', [
        'model' => $model,
    ]);
}

    /**
     * Deletes an existing Promo model.
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
     * Finds the Promo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Promo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Promo::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
