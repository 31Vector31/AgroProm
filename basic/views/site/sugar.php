<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use scotthuangzl\googlechart\GoogleChart;
use yii\bootstrap4\Dropdown;

$this->title = 'Сахар и продукты переработки';

?>


<style>
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
        width: 400px;
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
    <img align="center" width="60%" height="60%" src="https://astartaholding.com/images/uploads/042003e3d01981eee74ab5148aaa430f.jpg" alt="">
    </div>

    <p>Мощности по производству сахара состоят из 8 сахарных заводов, которые могут перерабатывать более 40 000 тонн сахарной свеклы в сутки. Четыре из них расположены в Полтавской области, два - в Харьковской, по одному - в Винницкой и Хмельницкой областях.</p>
    <p>Конкурентным преимуществом АСТАРТЫ является наличие собственной сырьевой базы. Это существенно снижает зависимость от внешних поставок, позволяет оптимизировать логистику, снижает себестоимость производимого сахара и улучшает его качество. Патока продается на экспорт и используется на наших фермах. Свекольный жом поставляется на наш биогазовый комплекс и используется в качестве удобрений на наших агрофирмах.</p>
    <p>Холдинг активно модернизирует свои сахарные заводы. В Компании реализуется Программа энергоэффективности, направленная на сокращение расходов природного газа и угля, использования известнякового камня и свежей воды в процессе производства сахара. В результате реализации этой программы, средний показатель расхода природного газа на заводах Компании за последние 5 лет сократился на 20%.</p>
    <p>Холдинг активно внедряет системы управления качеством и безопасностью продукции. Так, на Глобинском, Яреськовском, Новооржицком и Ждановском сахарных заводах действует система менеджмента пищевой безопасности в соответствии с требованиями схемы сертификации FSSC 22000, которая признана международной организацией GFSI (Global Food Safety Initiative - Глобальная инициатива по пищевой безопасности).</p>
    <p>Сертификаты ДСТУ ISO 9001 имеют системы управления качеством Глобинского, Кобеляцкого, Ждановского и Яреськовского сахарных заводов. Также на Кобеляцком, Наркевичский, Новоивановском сахарных заводах действуют системы управления безопасностью пищевой продукции в соответствии со стандартом ISO 22000.</p>
    <p>Наркевичский, Кобеляцкий, Ждановский, Яреськовский, Новоивановский, Новооржицком, Глобинский сахарные заводы и главный офис Холдинга сертифицированы на соответствие требованиям международного стандарта ISO 14001 «Система менеджмента окружающей среды". Кроме того, главный офис Холдинга, Новооржицком и Наркевичский сахарный завод сертифицированы на соответствие требованиям международного стандарта OHSAS 18001 «Система менеджмента гигиены и безопасности труда".</p>
    <p style="margin-bottom: 0">В сезон сахароварения 2016 прошла сертификация Новооржицкого сахарного завода по международному стандарту ISO 50001 "Системы энергетического менеджмента", требования которого направлены на оптимизацию потребления энергетических ресурсов. В сезоне 2017 по этому же стандарту сертифицированный Глобинский сахарный завод. И другие сахарные заводы (Яреськовский, Наркевичский, Ждановский) периодически проходят социально-экологические аудиты по требованию потребителей для подтверждения соответствия международным требованиям по системе SMETA 4 Pillar, Coca-cola Supplier Guiding Principles.</p>

    <div class="sel sel--black-panther">
        <select name="select-profession" id="select-profession">
            <option value="" disabled>Выбор продукции</option>
            <option value="shrot-podsolnechnyy">Шрот подсолнечный</option>
            <option value="maslo-podsolnechnoe">Масло подсолнечное</option>
            <option value="goroh-zhelty">Сахар</option>
        </select>
    </div>

    <br><br>
    <div id="hue">
        <br><br><br><br><br><br><br><br><br><br>
    </div>

    <!--<div class="dropdown">
        <button data-toggle="dropdown" class="btn btn-secondary dropdown-toggle">Выбор продукции<b class="caret"></b></button>
        <?php
/*        echo Dropdown::widget([
            'items' => [
                ['label' => 'Шрот подсолнечный', 'url' => ['/site/sugar', 'product' => 'shrot-podsolnechnyy']],
                ['label' => 'Масло подсолнечное', 'url' => ['/site/sugar', 'product' => 'maslo-podsolnechnoe']],
                ['label' => 'Сахар', 'url' => ['/site/sugar', 'product' => 'goroh-zhelty']],
            ],
        ]);
        */?>
    </div>

    <br>

    --><?/* echo $table;

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
            data: {'product': "shrot-podsolnechnyy"},
            success: function(res){
                $('#hue').html(res);
            },
            error: function(){
                alert('Error!');
            }
        });

        $.ajax({
            url: '/site/product',
            type: 'GET',
            data: {'product': "shrot-podsolnechnyy"},
            success: function(res){
                $('#hue').html(res);
            },
            error: function(){
                alert('Error!');
            }
        });
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
            $(".sel__placeholder").text('Шрот подсолнечный');
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

        if(index===0) product = "shrot-podsolnechnyy";
        if(index===1) product = "maslo-podsolnechnoe";
        if(index===2) product = "goroh-zhelty";

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


