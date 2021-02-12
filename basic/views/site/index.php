<?php

/* @var $this yii\web\View */

$this->title = 'AgroProm';
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<style>

    * {
        /*box-sizing: border-box;*/
    }

    .slider {
        width: 95%;
        margin: 0px auto;
    }

    .slick-slide {
        margin: 0px 20px;
    }

    .slick-slide img {
        width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }


    .slick-slide {
        transition: all ease-in-out 1s;
        opacity: .2;
    }

    .slick-active {
        opacity: .5;
    }

    .slick-current {
        opacity: 1;
    }


    .image{
        height: 500px;
        width: 100%;
        background-size: cover;
        color:white;

        display: flex;
        align-items: flex-end;
        padding: 50px;
    }
    .col-lg-6{
        width: 350px;
        height: 500px;

        padding: 25px;
        margin: 20px;
    }
    .hell>span {
        float: left;
        width: 40%;

        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .hell>span:last-child {
        width: 12%;
        float:right;
    }
    .hell>span:last-child
    {
        float:right;
    }

</style>





<div class="site-index" style="width: 100%;">



    <section class="regular slider">
        <div>
        <div style="background-image: url('https://i.ibb.co/qgd2Chc/pole2.jpg');" class="image">
            <div>
                <h1>Продукция лучшего качества</h1>

                <h5>Мы производим продукцию наивысшего качества для самых прихотливых <br> украинских и мировых потребителей</h5>
            </div>
        </div>
        </div>

        <div>
            <div style="background-image: url('https://astartaholding.com/images/uploads/472b1157d1df216f16a80957cd98b1cc.jpg');" class="image">

                <div>
                    <h1>Продукция лучшего качества</h1>

                    <h5>Мы производим продукцию наивысшего качества для самых прихотливых <br> украинских и мировых потребителей</h5>
                </div>

            </div>
        </div>

        <div>
            <div style="background-image: url('https://i.ibb.co/qgd2Chc/pole2.jpg');" class="image">
                <div>
                    <h1>Продукция лучшего качества</h1>

                    <h5>Мы производим продукцию наивысшего качества для самых прихотливых <br> украинских и мировых потребителей</h5>
                </div>
            </div>
        </div>
    </section>

    <br>


        <div class="container" style=" ">
            <div class="row text-left" style=" ">
                <div style="border: 1px solid grey; " class="col-xs-12 col-lg-4">

                    <img style="" width="300px" height="200px" src="https://nibulon.com/thumb/mc/8733.jpg" alt="" class="w-100">

                    <div style="" class="kor">
                        19 марта 2020
                    </div>

                    <h4 style="">
                        AgroProm готовит к вводу в эксплуатацию дополнительные мощности в Голой Пристани
                    </h4>

                    <div class="text">Благодаря строительству трех дополнительных емкостей сегодня мощности филиала «Голопристанская» (Херсонская обл.) Увеличено до 97,9 тыс. Единовременного хранения сельскохозяйственной продукции.</div>
                    <br>
                    <div class="hell">
                        <a href="<?=Yii::$app->urlManager->createUrl("site/news1")?>">Читать дальше...</a>
                        <span><i class="fa fa-eye" aria-hidden="true"></i> 23</span>
                    </div>
                </div>



                <div style="border: 1px solid grey;" class="col-xs-12 col-lg-4">

                    <img style="" width="300px" height="200px" src="https://nibulon.com/thumb/mc/8731.jpg" alt="" class="w-100">

                    <div style="" class="kor">
                        22 августа 2020
                    </div>

                    <h4 style="">
                        AgroProm, несмотря на короновирус, запустил новый терминал
                    </h4>

                    <div class="text">Лидер аграрного рынка Украины компания AgroProm инвестировала 23 млн долл. США в строительство нового перегрузочного терминала в с. Марьянское Апостоловского района Днепропетровской области. Это уже 10-й такой ...</div>
					<br>
                    <div class="hell">
                        <a href="<?=Yii::$app->urlManager->createUrl("site/news1")?>">Читать дальше...</a>
                        <span><i class="fa fa-eye" aria-hidden="true"></i> 20</span>
                    </div>
                </div>



                <div class="w-100"></div>



                <div style=" border: 1px solid grey;" class="col-xs-12 col-lg-4">

                    <img style="" width="300px" height="200px" src="https://nibulon.com/thumb/g/6033/23266.jpg" alt="" class="w-100">

                    <div style="" class="kor">
                        2 сентября 2020
                    </div>

                    <h4 style="">
                        Первый год работы гиганта NIBULON MAX
                    </h4>

                    <div class="text">Всего за год самоходный плавучий кран проекту П-140 NIBULON MAX отгрузил на экспорт 2500000 тонн сельхозпродукции.  Марьянское Апостоловского района Днепропетровской области. Единовременного хранения сельскохозяйственной продукции.</div>
					<br>
                    <div class="hell">
                        <a href="<?=Yii::$app->urlManager->createUrl("site/news1")?>">Читать дальше...</a>
                        <span><i class="fa fa-eye" aria-hidden="true"></i> 29</span>
                    </div>
                </div>


            </div>

        </div>








    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).on('ready', function() {

            $(".regular").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 4000,
                //dots: true,
                //infinite: true,
                //slidesToShow: 1,
                //slidesToScroll: 1
            });

        });
    </script>



</div>

<?php


$this->registerCssFile( '@web/slick/slick.css');
$this->registerCssFile( '@web/slick/slick-theme.css');

$this->registerJsFile(
    '@web/slick/slick.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);


?>

