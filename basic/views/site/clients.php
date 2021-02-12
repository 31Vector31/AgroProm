<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Продукция';



?>


<style>
    .site-clients{

    }
	.w-100{
		margin:40px;
	}
    .image
    {
        width: 490px;height: 310px; background-size: cover;
        margin: 40px; margin-bottom: 50px;
        position:relative;
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
    .image:hover{
        background-image: url('https://astartaholding.com/images/uploads/54fd3c97647e8bb9a8276fb83f70d5e7.jpg');
    }

</style>
<div class="site-clients" >
    <h1><?= Html::encode($this->title) ?></h1>

<div class="container" style=" padding: 0; width: 100%">
            <div class="row text-left" style="width: 100%; padding: 0;">
                <div  style="background-image: url('https://astartaholding.com/images/uploads/ba841871063d50461101fbfed9fde677.jpg')" class="col-xs-12 col-lg-6 image">

                    <a href="<?=Yii::$app->urlManager->createUrl("site/animalhusbandry")?>">
                        <div class="white">
                            <h4>Продукция животноводства</h4>
                        </div>
                    </a>
                </div>



                <div style="background-image: url('https://astartaholding.com/images/uploads/54fd3c97647e8bb9a8276fb83f70d5e7.jpg')" class="col-xs-12 col-lg-6 image">

                    <a href="<?=Yii::$app->urlManager->createUrl("site/soybeanprocessing")?>">
                        <div class="white">
                            <h4>Продукция переработки сои</h4>
                        </div>
                    </a>

                   
                </div>

				

                <div class="w-100"></div><br><br>



                <div style="background-image: url('https://astartaholding.com/images/uploads/f0069532110fd597a19469d1891f8c7c.jpg')" class="col-xs-12 col-lg-6 image">

                    <a href="<?=Yii::$app->urlManager->createUrl("site/cropproduction")?>">
                        <div class="white">
                            <h4>Продукция растениеводства</h4>
                        </div>
                    </a>

                    
                </div>

                <div style="background-image: url('https://astartaholding.com/images/uploads/042003e3d01981eee74ab5148aaa430f.jpg')" class="col-xs-12 col-lg-6 image">

                    <a href="<?=Yii::$app->urlManager->createUrl("site/sugar")?>">
                        <div class="white">
                            <h4>Сахар и продукты переработки</h4>
                        </div>
                    </a>

                    
                </div>







            </div>

        </div>
    
    <!--<code><?/*= __FILE__ */?></code>-->

</div>


