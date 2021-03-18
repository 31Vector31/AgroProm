<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Новости';


?>


<style>

	.hue{
        width: 500px;
        height: 170px;

        padding: 25px;
        margin: 20px;
        position: relative;
    }

    .hell{
        position:absolute;
        bottom:0;
    }


	
</style>
<div class="site-press_service" >
    <h1><?= Html::encode($this->title) ?></h1>

	<div class="container-fluid" style="">
            <div class="row text-left">
                <div style=" border: 1px solid grey;" class="col-xs-12 hue">
                 
                    <div style="" class="kor">
                        19 марта 2020
                    </div>

                    <h4 style="">
                        AgroProm готовит к вводу в эксплуатацию дополнительные мощности 
                    </h4>
                       
                    <div class="hell">
                        <a href="<?=Yii::$app->urlManager->createUrl("site/news1")?>">Читать дальше...</a>
                        
                    </div>
                </div>

				<div style=" border: 1px solid grey;" class="col-xs-12 hue">
                 
                    <div style="" class="kor">
                        19 марта 2020
                    </div>

                    <h4 style="">
                        AgroProm, несмотря на короновирус, запустил новый терминал 
                    </h4>
                       
                    <div class="hell">
                        <a href="<?=Yii::$app->urlManager->createUrl("site/news1")?>">Читать дальше...</a>
                        
                    </div>
                </div>

                <div style=" border: 1px solid grey;" class="col-xs-12 hue">

                    <div style="" class="kor">
                        19 марта 2020
                    </div>

                    <h4 style="">
                        AgroProm готовит к вводу в эксплуатацию дополнительные мощности
                    </h4>

                    <div class="hell">
                        <a href="<?=Yii::$app->urlManager->createUrl("site/news1")?>">Читать дальше...</a>

                    </div>
                </div>

                <div style=" border: 1px solid grey;" class="col-xs-12 hue">

                    <div style="" class="kor">
                        19 марта 2020
                    </div>

                    <h4 style="">
                        AgroProm, несмотря на короновирус, запустил новый терминал
                    </h4>

                    <div class="hell">
                        <a href="#">Читать дальше...</a>

                    </div>
                </div>

                <div style=" border: 1px solid grey;" class="col-xs-12 hue">

                    <div style="" class="kor">
                        19 марта 2020
                    </div>

                    <h4 style="">
                        AgroProm готовит к вводу в эксплуатацию дополнительные мощности
                    </h4>

                    <div class="hell">
                        <a href="#">Читать дальше...</a>

                    </div>
                </div>

                <div style=" border: 1px solid grey;" class="col-xs-12 hue">

                    <div style="" class="kor">
                        19 марта 2020
                    </div>

                    <h4 style="">
                        AgroProm, несмотря на короновирус, запустил новый терминал
                    </h4>

                    <div class="hell">
                        <a href="#">Читать дальше...</a>

                    </div>
                </div>
















            </div>

        </div>
            
    
    <!--<code><?/*= __FILE__ */?></code>-->
</div>
