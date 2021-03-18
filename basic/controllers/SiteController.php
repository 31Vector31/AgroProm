<?php

namespace app\controllers;

use app\models\SignupForm;
use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use GuzzleHttp\Client; // подключаем Guzzle
use yii\helpers\Url;
use scotthuangzl\googlechart\GoogleChart;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
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

       /* return $this->render('about');*/
    }

    public function actionClients()
    {

        return $this->render('clients');

        /* return $this->render('about');*/
    }

    public function actionAnimalhusbandry()
    {
        return $this->render('animalhusbandry');
    }

    public function actionSoybeanprocessing($product = "soya")
    {
        // создаем экземпляр класса
        $client = new Client();
        // отправляем запрос к странице Яндекса

        $res = $client->request('GET', 'https://tripoli.land/analytics/'.$product);
        // получаем данные между открывающим и закрывающим тегами body
        $body = $res->getBody();
        // вывод страницы Яндекса в представление

        $document = \phpQuery::newDocumentHTML($body);
        // получаем список новостей

        $table = $document->find("div.table-responsive");

        //pq аналог $ в jQuery
        $pq = pq($table);
        // добавим свой класс к последней новости списка
        $pq->find('table.tripoli')->addClass('table table-striped');

        $tbody = $table->find("tbody");

        $hue =[];

        //pq аналог $ в jQuery
        $pqq = $tbody;

        $full = strip_tags($pqq->find('td'), "td");

        $full = explode("\n", $full);

        for ($i = 1; $i < count($full)-4; $i+=4) {
            array_push($hue, $full[$i], intval($full[$i+1]));
        }

        $chunk=array_chunk($hue, 2);

        array_unshift($chunk, array('Task', $product));

        return $this->render('soybeanprocessing', ['value' => $chunk,'table' => $table]);
    }

    public function actionCropproduction($product = "kukuruza")
    {
        // создаем экземпляр класса
        $client = new Client();
        // отправляем запрос к странице Яндекса

        $res = $client->request('GET', 'https://tripoli.land/analytics/'.$product);
        // получаем данные между открывающим и закрывающим тегами body
        $body = $res->getBody();
        // вывод страницы Яндекса в представление

        $document = \phpQuery::newDocumentHTML($body);
        // получаем список новостей
       
        $table = $document->find("div.table-responsive");

            //pq аналог $ в jQuery
            $pq = pq($table);
            // добавим свой класс к последней новости списка
            $pq->find('table.tripoli')->addClass('table table-striped');

        $tbody = $table->find("tbody");

        $hue =[];

            //pq аналог $ в jQuery
            $pqq = $tbody;

            $full = strip_tags($pqq->find('td'), "td");

            $full = explode("\n", $full);

            for ($i = 1; $i < count($full)-4; $i+=4) {
                array_push($hue, $full[$i], intval($full[$i+1]), intval($full[$i+1])+100);
            }

            $chunk=array_chunk($hue, 3);

            array_unshift($chunk, array('Task', "AgroProm", "Остальные"));

        return $this->render('cropproduction', ['value' => $chunk,'table' => $table,'title' => $product]);
    }

    public function actionSugar($product = "shrot-podsolnechnyy")
    {
        // создаем экземпляр класса
        $client = new Client();
        // отправляем запрос к странице Яндекса

        $res = $client->request('GET', 'https://tripoli.land/analytics/'.$product);
        // получаем данные между открывающим и закрывающим тегами body
        $body = $res->getBody();
        // вывод страницы Яндекса в представление

        $document = \phpQuery::newDocumentHTML($body);
        // получаем список новостей

        $table = $document->find("div.table-responsive");

        //pq аналог $ в jQuery
        $pq = pq($table);
        // добавим свой класс к последней новости списка
        $pq->find('table.tripoli')->addClass('table table-striped');

        $tbody = $table->find("tbody");

        $hue =[];

        //pq аналог $ в jQuery
        $pqq = $tbody;

        $full = strip_tags($pqq->find('td'), "td");

        $full = explode("\n", $full);

        for ($i = 1; $i < count($full)-4; $i+=4) {
            array_push($hue, $full[$i], intval($full[$i+1]));
        }

        $chunk=array_chunk($hue, 2);

        array_unshift($chunk, array('Task', $product));

        return $this->render('sugar', ['value' => $chunk,'table' => $table]);
    }

    public function actionNews1()
    {
        return $this->render('news1');
    }

    public function actionFilial($obl="Odessa",$product = "kukuruza")
    {
        if(Yii::$app->request->isAjax){
            /*return 'Ответ на запрос';*/
            $obl=Yii::$app->request->post('obl');

        return $this->renderAjax('filial', ['obl' => $obl]);
        }

        // создаем экземпляр класса
        $client = new Client();
        // отправляем запрос к странице Яндекса

        $res = $client->request('GET', 'https://tripoli.land/analytics/'.$product);
        // получаем данные между открывающим и закрывающим тегами body
        $body = $res->getBody();
        // вывод страницы Яндекса в представление

        $document = \phpQuery::newDocumentHTML($body);
        // получаем список новостей

        $table = $document->find("div.table-responsive");

        //pq аналог $ в jQuery
        $pq = pq($table);
        // добавим свой класс к последней новости списка
        $pq->find('table.tripoli')->addClass('table table-striped');

        $tbody = $table->find("tbody");

        $hue =[];

        //pq аналог $ в jQuery
        $pqq = $tbody;

        $full = strip_tags($pqq->find('td'), "td");

        $full = explode("\n", $full);

        for ($i = 1; $i < count($full)-4; $i+=4) {
            array_push($hue, $full[$i], intval($full[$i+1]));
        }

        $chunk=array_chunk($hue, 2);

        array_unshift($chunk, array('Task', $product));

        return $this->render('filial', ['obl' => $obl,'value' => $chunk,'table' => $table]);
    }

    public function actionPress_service()
    {

        return $this->render('press_service');

        /* return $this->render('about');*/
    }

    public function actionSuppliers()
    {

        return $this->render('suppliers');

        /* return $this->render('about');*/
    }

    public function actionSustainable_development()
    {

        return $this->render('sustainable_development');

        /* return $this->render('about');*/
    }

    public function actionSignup(){
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new SignupForm();
        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            $user = new User();
            $user->username = $model->username;
            $user->password = \Yii::$app->security->generatePasswordHash($model->password);
            if($user->save()){
                return $this->goHome();
            }
        }

        return $this->render('signup', compact('model'));
    }


}
