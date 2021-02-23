<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use scotthuangzl\googlechart\GoogleChart;
use yii\bootstrap4\Dropdown;

$this->title = 'Продукция растениеводства';


?>

<script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js">
</script>
<script type = "text/javascript">
    google.charts.load('current', {packages: ['corechart']});
</script>

<style>

    p {
        text-indent: 20px; /* Отступ первой строки в пикселах */
        font-weight: 300;
    }

</style>
<div class="site-animalhusbandry" >
    <h1><?= Html::encode($this->title) ?></h1>

    <div style="text-align: center; margin: 30px;">
    <img align="center" width="60%" height="60%" src="https://astartaholding.com/images/uploads/f0069532110fd597a19469d1891f8c7c.jpg" alt="">
    </div>

    <p>Агрофирмы AgroProm, расположенные в Полтавской, Винницкой, Житомирской, Тернопольской, Хмельницкой, Черниговской, Харьковской и Черкасской областях, специализирующихся на выращивании сахарной свеклы, зерновых и масличных культур. С целью повышения урожайности мы применяем современные технологии земледелия, что позволяет с одной стороны повысить экономическую эффективность, а с другой - отвечать современным экологическим стандартам. Наряду с этим, значительное внимание уделяется внедрению органического земледелия, положительно влияет на плодородие почв.</p>
    <p>С целью обеспечения предприятий компании мощностями по хранению урожая разработан и внедрен программу "Зерно". В рамках этой программы осуществляется модернизация существующих мощностей по хранению и строительство современных элеваторов. Общий объем современных мощностей по хранению составляет 500 тыс. Тонн. За последние несколько лет построено и модернизировано ряд элеваторов, расположенных в разных Регионов деятельности компании. Одновременно Компания активно использует систему комплексного хранения в полиэтиленовых рукавах. Для обеспечения сельскохозяйственных предприятий собственным посевным материалом компания использует мощности собственного семенного завода.</p>

    <div class="dropdown">
        <button data-toggle="dropdown" class="btn btn-secondary dropdown-toggle">Выбор продукции<b class="caret"></b></button>
        <?php
        echo Dropdown::widget([
            'items' => [
                ['label' => 'Кукуруза', 'url' => ['/site/cropproduction', 'product' => 'kukuruza']],
                ['label' => 'Пшеница 2 класс', 'url' => ['/site/cropproduction', 'product' => 'pshenitsa-2-klass']],
                ['label' => 'Пшеница 3 класс', 'url' => ['/site/cropproduction', 'product' => 'pshenitsa-3-klass']],
                ['label' => 'Ячмень', 'url' => ['/site/cropproduction', 'product' => 'yachmen']],
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


