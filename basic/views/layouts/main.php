<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use rmrevin\yii\fontawesome\FA;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        /*@import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');*/
        *{
            font-family: 'Roboto', sans-serif;
            /* font-family: 'Merriweather', serif;*/
            font-weight: 400;
        }
        .wrap{
            background-color:#faf9f8;
        }

        a{
            color: black;
        }
        a:hover
        {
            color: #4e555b;
        }
    </style>

</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => "AgroProm",
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-dark bg-dark',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Про компанию', 'url' => ['/site/about']],
            ['label' => 'Устойчивое развитие', 'url' => ['/site/sustainable_development']],
            ['label' => 'Новости', 'url' => ['/site/press_service']],
            ['label' => 'Продукция', 'url' => ['/site/clients']],
            ['label' => 'Поставщикам', 'url' => ['/site/suppliers']],
            ['label' => 'Контакты', 'url' => ['/site/contact']],
            /*['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => 'Об приложении', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Авторизация', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Выйти (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )*/
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container" style="padding-top: 20px;">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="bg-light text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h6 class="text-uppercase"><i class="fa fa-phone" aria-hidden="true"></i>  +38 (0512) 37-23-44</h6>


            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h6 class="text-uppercase mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> ул. Барицкого, 23, 45453, Одесса</h6>


            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                <h6 class="text-uppercase"><a href="mailto:info@example.com"><i class="fa fa-envelope" aria-hidden="true"></i>  info@example.com</a></h6>


            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © <?/*= date('Y') */?> Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">Server</a>
    </div>
    <!-- Copyright -->
</footer>





<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
