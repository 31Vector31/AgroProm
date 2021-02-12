<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Продукция';



?>


<style>
    .site-clients{

    }
    .image
    {
        position:relative;
        background-size: cover;
        height: 310px;
    }
    .white{
        background-color: white;
        width: 350px;
        height: 100px;
        position:absolute; bottom:-50px; left:0;
        border: 1px solid gray;
        padding: 25px;
        padding-left:30px;
    }

</style>
<div class="site-clients" >
    <h1><?= Html::encode($this->title) ?></h1><br>

<div class="container" style=" ">
            <div class="row text-left" style="">
                <div class="col-xs-12 col-lg-6 " style="margin-bottom: 100px;">
                    <div class="image" style="background-image: url('https://astartaholding.com/images/uploads/ba841871063d50461101fbfed9fde677.jpg')">
                    <a href="<?=Yii::$app->urlManager->createUrl("site/animalhusbandry")?>">
                        <div class="white">
                            <h4>Продукция животноводства</h4>
                        </div>
                    </a>
                    </div>
                </div>


                <div  class="col-xs-12 col-lg-6 " style="margin-bottom: 100px;">

                    <div class="image" style="background-image: url('https://astartaholding.com/images/uploads/54fd3c97647e8bb9a8276fb83f70d5e7.jpg')">
                    <a href="<?=Yii::$app->urlManager->createUrl("site/soybeanprocessing")?>">
                        <div class="white">
                            <h4>Продукция переработки сои</h4>
                        </div>
                    </a>
                    </div>
                   
                </div>

                <div class="col-xs-12 col-lg-6 " style="margin-bottom: 100px;">

                    <div class="image" style="background-image: url('https://astartaholding.com/images/uploads/f0069532110fd597a19469d1891f8c7c.jpg')">
                    <a href="<?=Yii::$app->urlManager->createUrl("site/cropproduction")?>">
                        <div class="white">
                            <h4>Продукция растениеводства</h4>
                        </div>
                    </a>
                    </div>
                    
                </div>

                <div class="col-xs-12 col-lg-6 " style="margin-bottom: 100px;">

                    <div class="image" style="background-image: url('https://astartaholding.com/images/uploads/042003e3d01981eee74ab5148aaa430f.jpg')">
                    <a href="<?=Yii::$app->urlManager->createUrl("site/sugar")?>">
                        <div class="white">
                            <h4>Сахар и продукты переработки</h4>
                        </div>
                    </a>
                </div>
                    
                </div>







            </div>

        </div>
    
    <!--<code><?/*= __FILE__ */?></code>-->

</div>


