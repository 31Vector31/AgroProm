<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use scotthuangzl\googlechart\GoogleChart;
use yii\bootstrap4\Dropdown;
$this->title = 'Продукция переработки сои';



?>


<style>
    .site-animalhusbandry{

    }

    p {
        text-indent: 20px; /* Отступ первой строки в пикселах */
        font-weight: 300;
    }

</style>
<div class="site-animalhusbandry" >
    <h1><?= Html::encode($this->title) ?></h1>

    <div style="text-align: center; margin: 30px;">
    <img align="center" width="60%" height="60%" src="https://astartaholding.com/images/uploads/54fd3c97647e8bb9a8276fb83f70d5e7.jpg" alt="">
    </div>

    <p>Интегрированный комплекс по переработке сои находится в пгт. Глобино (Полтавская область). Проектная перерабатывающая мощность предприятия - 700 тонн сои в день или 220 000 тонн в год. За год завод производит 160 000 тонн высокопротеиновый шрота, 40 000 тонн соевого масла и 9000 тонн гранулированной оболочки. В состав комплекса также входят мощности по хранению готовой продукции и элеватор емкостью 42 000 тонн, а также необходимые инженерные, автомобильные и железнодорожные коммуникации.
    На предприятии установлено оборудование ведущих производителей, которое сертифицировано в соответствии с международными стандартами. Кроме того, на предприятии предусмотрены мощные системы очистки воды и воздуха.</p>
    <p>В начале 2016 Глобинский завод переработки сои успешно прошел комплексную сертификацию по международным стандартам ISO 9001, ISO 14001, OHSAS 18001 и схемой сертификации FSSC 22000 для пищевой и кормовой продукции. В 2017 году прошла сертификация завода по международному стандарту ISO 50001 по энергетическому менеджменту, а в 2018 году сертификация по стандарту по безопасности кормов GMP + B2.</p>
    <p>Продукция завода (высокопротеиновый шрот, соевое гидратированное масло и соевое оболочка) имеет высокий стандарт качества и уже получила лучшие оценки потребителей - отечественных и зарубежных производителей продукции птицеводства, животноводства и рыбоводства.</p>

    <div class="dropdown">
        <button data-toggle="dropdown" class="btn btn-secondary dropdown-toggle">Выбор продукции<b class="caret"></b></button>
        <?php
        echo Dropdown::widget([
            'items' => [
                ['label' => 'Соя', 'url' => ['/site/soybeanprocessing', 'product' => 'soya']],
                ['label' => 'Рапс', 'url' => ['/site/soybeanprocessing', 'product' => 'raps']],
                ['label' => 'Подсолнечник', 'url' => ['/site/soybeanprocessing', 'product' => 'podsolnechnik']],
            ],
        ]);
        ?>
    </div>

    <br>

    <? echo $table;

    echo GoogleChart::widget(array('visualization' => 'LineChart',
        'data' => $value,
        'options' => array('title' => 'Средняя цена')));
    ?>


</div>


