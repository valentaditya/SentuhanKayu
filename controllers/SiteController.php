<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\main_dashboard;
use app\models\Promo;
use app\models\Alatdapur;
use app\models\Hiasan;
use app\models\Lainnya;
use app\models\Datapromo;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::class,
                'only' => ['index'],
                'rules' => [
                    [
                        // 'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = 'main_login';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
        return $this->render('login');
    }

    public function actionPassword()
    {
        $this->layout = false;
        $model = new ForgotPasswordForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $user = User::findOne(['username' => $model->username]);
    
            if ($user) {
                $user->password = $model->password; // Gunakan atribut password
                
                if ($user->save()) {
                    Yii::$app->session->setFlash('success', 'Password berhasil diubah.');
                } else {
                    Yii::$app->session->setFlash('error', 'Terjadi kesalahan saat mengubah password.');
                }
            } else {
                Yii::$app->session->setFlash('error', 'Username tidak ditemukan.');
            }
    
            return $this->redirect(['site/index']); // Ganti dengan halaman tujuan setelah berhasil mengubah password.
        }
        return $this->render('Password',['model' =>$model]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionDashboard()
    {
        $this->layout = 'main_dashboard';
        return $this->render('dashboard');
        
    }

    public function actionKatalog()
    {
        $this->layout = 'main_dashboard';
        $promo = Promo::find()->all();
        $alatdapur = Alatdapur::find()->all();
        $hiasan = Hiasan::find()->all();
        $lainnya = Lainnya::find()->all();
        $datapromo = Datapromo::find()->all();
        // return $this->render('katalog');

        return $this->render('katalog', ['promo' => $promo , 'hiasan' => $hiasan , 'alatdapur' => $alatdapur, 'lainnya' => $lainnya, 'datapromo' => $datapromo]);
        
    }

    public function actionModel3d()
    {
        $this->layout = 'main_3d';
        return $this->render('model3d');
        
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
