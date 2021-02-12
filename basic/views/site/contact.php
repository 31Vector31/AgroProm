<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';

?>

<style>
.site-contact{

    }
	
	.child {  
    padding: 10px;
    float: left;
    width: 23.5%;
    margin-right: 2%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.child:last-child {
    margin-right: 0;
}

.push {
  list-style: none;
  
}
.push li {
  position: relative;
  padding: 20px 0 5px 20px;
  color: black;
  
}
.push li:before {
  position: absolute;
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: #4F5151;
  content: "";
  left: 0;
  transition: .3s ease-in-out;
  top: 27px;
}
.push li:after {
  position: absolute;
  border-left: 1px dotted #4F5151;
  width: 1px;
  bottom: -12px;
  content: "";
  left: 3px;
  top: 48px;
}
.push li:hover:before{box-shadow: 0 0 0 10px rgba(0,0,0,.2)}
.push li:last-child:after {content: none;}

</style>

<div class="site-contact" >
    <h1><?= Html::encode($this->title) ?></h1>



	<div>

        <iframe class="child" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2311.856778287547!2d30.719410127839932!3d46.443217569328766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c633b6d40ac157%3A0x8f4ac8ee70305e0c!2z0YPQuy4g0JHQsNCz0YDQuNGG0LrQvtCz0L4sIDIzLCDQntC00LXRgdGB0LAsINCe0LTQtdGB0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsIDY1MDAw!5e0!3m2!1sru!2sua!4v1609705711023!5m2!1sru!2sua" width="800" height="600" frameborder="0" style="width:800px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


        <div class="child">

		<div>
		<i class="fa fa-phone-square fa-3x child" aria-hidden="true"></i>
		<div>
		<p>+380 44 461-88-01</p>
		<p>+380 44 461-88-04</p>
		<p>+380 44 461-88-06</p>
		</div>
		</div>

            <br><br>

		<div >
		<i class="fa fa-map-marker fa-3x child" aria-hidden="true"></i>
		<div>
		<p>ул. Багрицкого, 23, 45453,</p>
		<p>45453, Одесса,</p>
		<p>Украина</p>
		</div>
		</div>

            <br><br>
		
		<div >
		<i class="fa fa-print fa-3x child"" aria-hidden="true"></i>
		<p>+380 44 461-90-66</p>
		<p>+380 44 461-88-66</p>
		</div>

        </div>

	</div>
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>
	<h3>Если Вам стало известно о фактах:</h3>
	
	<ul class="push">
  <li>конфликта интересов, оказания давления на сотрудников, нарушения внутренних политик и процедур, в частности в сферах охраны труда и защиты окружающей среды</li>
  <li>мошенничества и коррупции, злоупотребления служебным положением и доверием, нарушения прав участников тендеров</li>
  </ul>
  
  <br>
  <h4>Позвоните на Горячую линию, единую для всех предприятий компании, по телефону 0-800-501-483 или заполнив форму по ссылке написав на электронный адрес: dovira@agroprom.ua.</h4>

	
	</div>
