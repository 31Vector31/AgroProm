<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Поставщикам';


/*print_r ($array);*/
?>

<style>
.site-suppliers{

}

.push {
    list-style: none;

}
.push li {
    position: relative;
    padding: 20px 0 5px 30px;
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

p {
    text-indent: 20px; /* Отступ первой строки в пикселах */
    font-weight: 300;
}


</style>

<div class="site-suppliers" >

    <h1>Поставщикам</h1>
    <h3>Агропромхолдинг AgroProm на постоянной основе осуществляет закупки:</h3>

    <ul class="push">
        <li>минеральных удобрений</li>
        <li>семян</li>
        <li>средств защиты растений</li>
        <li>горюче-смазочных материалов</li>
        <li>с/х техники отечественного и иностранного производства</li>
        <li>запчастей и комплектующих к технике (шины, аккумуляторные батареи и т.д.)</li>
        <li>оборудования для животноводства</li>
        <li>ветеринарных препаратов</li>
        <li>угля</li>
        <li>мешков для сахара, фильтровальных тканей</li>
    </ul>

    <p>Мы осознаем наш моральный долг положительно влиять на стоимость нашей продукции на протяжении всей цепочки - от производства до реализации покупателям, опираясь на принципы социальной ответственности. Как результат, в компании разработаны этический Кодекс социальной ответственности поставщиков, в рамках которого ожидаем, что наши партнеры и поставщики:</p>
</div>

<ul class="push">
    <li>придерживаться лучших общепринятых практик корпоративной этики и ответственно относиться к обществу и окружающей среды;</li>
    <li>уважать принципы и положения этого Кодекса.</li>
</ul>

