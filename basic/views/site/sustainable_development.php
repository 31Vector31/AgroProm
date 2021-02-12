<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Устойчивое развитие';


/*print_r ($array);*/
?>

<style>
    .site-sustainable_development{

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

<div class="site-sustainable_development" >
    <h1>Устойчивое развитие</h1>
    <h3>Устойчивое развитие AgroProm - это сочетание трех составляющих: экономической, экологической и социальной.</h3>

    <div style="text-align: center; margin: 30px;">
    <img  src="https://www.kgnt.kz/wp-content/uploads/2019/11/%D1%83%D1%81%D1%82%D1%80%D0%BE%D0%B9%D1%87%D0%B8%D0%B2%D0%BE%D0%B5-%D1%80%D0%B0%D0%B7%D0%B2%D0%B8%D1%82%D0%B8%D0%B5-%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D0%BA%D0%B0.png" alt="">
</div>

    <h4>Наш вклад к глобальным целям устойчивого развития ООН</h4>

    <ul class="push">
        <li>Устойчивое развитие компании обеспечивается реализацией политики корпоративной социальной ответственности.</li>
        <li>Одним из действенных механизмов управления КСО соответствующая Стратегия, разработанная в 2014 году с целью обобщения социальных и экологических инициатив, усиление их результативности.</li>
        <li>В рамках своей стратегии AgroProm подтверждает приверженность принципам прозрачности и ответственности в своей ежедневной деятельности и направляет усилия на достижение устойчивого лидерства.</li>
        <li>Мы поддерживаем 10 принципов Глобального Договора ООН в сферах: права человека, трудовые отношения, охрана окружающей среды и противодействие коррупции и расширяем свою ответственность.</li>
        <li>Цели должны помочь объединить усилия всех стран по обеспечению более гармоничной жизни для своих граждан и развития планеты.</li>
        <li>Мы принимаем и разделяем Цели устойчивого развития, делаем вклад в их достижение постоянно в своей повседневной бизнес-деятельности.</li>
    </ul>
	
</div>