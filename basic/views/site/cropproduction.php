<?php

/* @var $this yii\web\View */



use yii\helpers\Html;
/*use yii\helpers\Url;
use scotthuangzl\googlechart\GoogleChart;
use yii\bootstrap4\Dropdown;*/

$this->title = 'Продукция растениеводства';


?>

<!--<script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js">
</script>
<script type = "text/javascript">
    google.charts.load('current', {packages: ['corechart']});
</script>-->



<style>
    /*@import url('https://fonts.googleapis.com/css?family=Lato|Quicksand');*/
    p {
        text-indent: 20px; /* Отступ первой строки в пикселах */
        font-weight: 300;
    }

    .rule {
        margin: 10px 0;
        border: none;
        height: 1.5px;
        background-image: linear-gradient(left, #f0f0f0, #c9bbae, #f0f0f0);
    }

    /* ===== Select Box ===== */
    .sel {
        font-size: 1rem;
        display: inline-block;
       /*margin: 3em 2em;*/
        width: 370px;
        background-color: transparent;
        position: relative;
        cursor: pointer;
    }

    .sel::before {
        position: absolute;
        content: '\f063';
        font-family: 'FontAwesome';
        font-size: 2em;
        color: #FFF;
        right: 20px;
        top: calc(50% - 0.5em);
    }

    .sel.active::before {
        transform: rotateX(-180deg);
    }

    .sel__placeholder {
        display: block;
        font-family: 'Quicksand';
        font-size: 2.3em;
        color: #838e95;
        padding: 0.2em 0.5em;
        text-align: left;
        pointer-events: none;
        user-select: none;
        visibility: visible;
    }

    .sel.active .sel__placeholder {
        visibility: hidden;
    }

    .sel__placeholder::before {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 0.2em 0.5em;
        content: attr(data-placeholder);
        visibility: hidden;
    }

    .sel.active .sel__placeholder::before {
        visibility: visible;
    }

    .sel__box {
        position: absolute;
        top: calc(100% + 4px);
        left: -4px;
        display: none;
        list-style-type: none;
        text-align: left;
        font-size: 1em;
        background-color: #FFF;
        width: calc(100% + 8px);
        box-sizing: border-box;
    }

    .sel.active .sel__box {
        display: block;
        animation: fadeInUp 500ms;
    }

    .sel__box__options {
        display: list-item;
        font-family: 'Quicksand';
        font-size: 1.5em;
        color: #838e95;
        padding: 0.5em 1em;
        user-select: none;
    }

    .sel__box__options::after {
        content: '\f00c';
        font-family: 'FontAwesome';
        font-size: 0.5em;
        margin-left: 5px;
        display: none;
    }

    .sel__box__options.selected::after {
        display: inline;
    }

    .sel__box__options:hover {
        background-color: #ebedef;
    }

    /* ----- Select Box Black Panther ----- */
    .sel {
        border-bottom: 4px solid rgba(0, 0, 0, 0.3);
    }

    .sel--black-panther {
        z-index: 3;
    }

    /* ----- Select Box Superman ----- */
    .sel--superman {
        /*   display: none; */
        z-index: 2;
    }

    /* ===== Keyframes ===== */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translate3d(0, 20px, 0);
        }

        to {
            opacity: 1;
            transform: none;
        }
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }

</style>

<div class="site-animalhusbandry" >
    <h1><?= Html::encode($this->title) ?></h1>

    <div style="text-align: center; margin: 30px;">
    <img align="center" width="60%" height="60%" src="https://astartaholding.com/images/uploads/f0069532110fd597a19469d1891f8c7c.jpg" alt="">
    </div>

    <p>Агрофирмы AgroProm, расположенные в Полтавской, Винницкой, Житомирской, Тернопольской, Хмельницкой, Черниговской, Харьковской и Черкасской областях, специализирующихся на выращивании сахарной свеклы, зерновых и масличных культур. С целью повышения урожайности мы применяем современные технологии земледелия, что позволяет с одной стороны повысить экономическую эффективность, а с другой - отвечать современным экологическим стандартам. Наряду с этим, значительное внимание уделяется внедрению органического земледелия, положительно влияет на плодородие почв.</p>
    <p style="margin-bottom: 0">С целью обеспечения предприятий компании мощностями по хранению урожая разработан и внедрен программу "Зерно". В рамках этой программы осуществляется модернизация существующих мощностей по хранению и строительство современных элеваторов. Общий объем современных мощностей по хранению составляет 500 тыс. Тонн. За последние несколько лет построено и модернизировано ряд элеваторов, расположенных в разных Регионов деятельности компании. Одновременно Компания активно использует систему комплексного хранения в полиэтиленовых рукавах. Для обеспечения сельскохозяйственных предприятий собственным посевным материалом компания использует мощности собственного семенного завода.</p>

    <div class="sel sel--black-panther">
        <select name="select-profession" id="select-profession">
            <option value="" disabled>Выбор продукции</option>
            <option value="kukuruza">Кукуруза</option>
            <option value="pshenitsa-2-klass">Пшеница 2 класс</option>
            <option value="pshenitsa-3-klass">Пшеница 3 класс</option>
            <option value="yachmen">Ячмень</option>
        </select>
    </div>

    <!--<div class="dropdown">
        <button data-toggle="dropdown" class="btn btn-secondary dropdown-toggle">Выбор продукции<b class="caret"></b></button>
        <h2 style="text-align: center"><?/*=$title;*/?></h2>
        <?php
/*        echo Dropdown::widget([
            'items' => [
                ['label' => 'Кукуруза', 'url' => ['/site/cropproduction', 'product' => 'kukuruza']],
                ['label' => 'Пшеница 2 класс', 'url' => ['/site/cropproduction', 'product' => 'pshenitsa-2-klass']],
                ['label' => 'Пшеница 3 класс', 'url' => ['/site/cropproduction', 'product' => 'pshenitsa-3-klass']],
                ['label' => 'Ячмень', 'url' => ['/site/cropproduction', 'product' => 'yachmen']],
            ],
        ]);
        */?>
    </div>-->

    <br><br>
    <div id="hue">
        <br><br><br><br><br><br><br><br><br><br>
    </div>
  <?/* echo $table;

    echo GoogleChart::widget(array('visualization' => 'LineChart',
        'data' => $value,
        'options' => array('title' => 'Средняя цена')));

    */?>
</div>


<script type="text/javascript">

    $(document).ready ( function(){
        $.ajax({
            url: '/site/product',
            type: 'GET',
            data: {'product': "kukuruza"},
            success: function(res){
                $('#hue').html(res);
            },
            error: function(){
                alert('Error!');
            }
        });

        /*$.ajax({
            url: '/site/product',
            type: 'GET',
            data: {'product': "kukuruza"},
            success: function(res){
                $('#hue').html(res);
            },
            error: function(){
                alert('Error!');
            }
        });*/
    });

    /* ===== Logic for creating fake Select Boxes ===== */
    $('.sel').each(function() {
        $(this).children('select').css('display', 'none');

        var $current = $(this);

        $(this).find('option').each(function(i) {
            if (i == 0) {
                $current.prepend($('<div>', {
                    class: $current.attr('class').replace(/sel/g, 'sel__box')
                }));

                var placeholder = $(this).text();
                $current.prepend($('<span>', {
                    class: $current.attr('class').replace(/sel/g, 'sel__placeholder'),
                    text: placeholder,
                    'data-placeholder': placeholder
                }));

                return;
            }

            $current.children('div').append($('<span>', {
                class: $current.attr('class').replace(/sel/g, 'sel__box__options'),
                text: $(this).text(),
            }));

            $(".sel__box__options").first().addClass("selected");
            $(".sel__placeholder").text('Кукуруза');
        });
    });

    // Toggling the `.active` state on the `.sel`.
    $('.sel').click(function() {
        $(this).toggleClass('active');

    });

    // Toggling the `.selected` state on the options.
    $('.sel__box__options').click(function() {

        var txt = $(this).text();
        var index = $(this).index();

        if(index===0) product = "kukuruza";
        if(index===1) product = "pshenitsa-2-klass";
        if(index===2) product = "pshenitsa-3-klass";
        if(index===3) product = "yachmen";

        $.ajax({
            url: '/site/product',
            type: 'GET',
            data: {'product': product},
            success: function(res){
                $('#hue').html(res);
            },
            error: function(){
                alert('Error!');
            }
        });

        $(this).siblings('.sel__box__options').removeClass('selected');
        $(this).addClass('selected');

        var $currentSel = $(this).closest('.sel');
        $currentSel.children('.sel__placeholder').text(txt);
        $currentSel.children('select').prop('selectedIndex', index + 1);
    });


</script>


