<?php

/* @var $this yii\web\View */

use scotthuangzl\googlechart\GoogleChart;

/*$this->title = $obl;*/

?>


<style>

   /* p {
        text-indent: 20px; !* Отступ первой строки в пикселах *!
        font-weight: 300;
    }

    .rule {
        margin: 10px 0;
        border: none;
        height: 1.5px;
        background-image: linear-gradient(left, #f0f0f0, #c9bbae, #f0f0f0);
    }

    .sel {
        font-size: 0.8rem;
        display: inline-block;
        margin: 20px;
        width: 450px;
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


    .sel {
        border-bottom: 4px solid rgba(0, 0, 0, 0.3);
    }

    .sel--black-panther {
        z-index: 3;
    }


    .sel--superman {
        !*   display: none; *!
        z-index: 2;
    }


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
    }*/
</style>
<div class="site-filial" >
    <h1>Филиал "<?= $obl ?>"</h1>

    <p>71300, Г. Одесса, ул. Промышленная, 1.</p>
    <p>График работы филиала:
        <b>пн-сб с 8.00 до 20.00</b> (регистрация авто до 18.00).
        Воскресенье - выходной.</p>
    <p>Вниманию поставщиков! На филиалов не разгружаются автомобили, общий вес (брутто) которых превышает 60 тонн !!!</p>

    <p><b>050-394-84-20, 095-278-23-17</b> - отдел закупок</p>
    <p><b>0503944247</b> - торговый отдел</p>
    <p><b>06138-2-16-11</b> - приемная</p>
    <p style="margin-bottom: 0">эл. почта - <b>kamdnepr_torg@agroprom.com.ua</b></p>

   <!-- <div class="dropdown">
        <button data-toggle="dropdown" class="btn btn-secondary dropdown-toggle">Цены продукции<b class="caret"></b></button>
        <?php
/*        echo Dropdown::widget([
            'items' => [
                ['label' => 'Кукуруза', 'url' => ['/site/filial', 'product' => 'kukuruza', 'obl' => $obl]],
                ['label' => 'Пшеница 2 класс', 'url' => ['/site/filial', 'product' => 'pshenitsa-2-klass', 'obl' => $obl]],
                ['label' => 'Пшеница 3 класс', 'url' => ['/site/filial', 'product' => 'pshenitsa-3-klass', 'obl' => $obl]],
                ['label' => 'Ячмень', 'url' => ['/site/filial', 'product' => 'yachmen', 'obl' => $obl]],
            ],
        ]);
        */?>
    </div>-->

    <div style="z-index: 6;" class="sel sel--black-panther">
        <select name="select-profession" id="select-profession">
            <option value="" disabled>Продукция растениеводства</option>
            <option value="kukuruza">Кукуруза</option>
            <option value="pshenitsa-2-klass">Пшеница 2 класс</option>
            <option value="pshenitsa-3-klass">Пшеница 3 класс</option>
            <option value="yachmen">Ячмень</option>
        </select>
    </div>

    <div style="z-index: 5;" class="sel sel--black-panther">
        <select name="select-profession" id="select-profession">
            <option value="" disabled>Продукция переработки сои</option>
            <option value="soya">Соя</option>
            <option value="raps">Рапс</option>
            <option value="podsolnechnik">Подсолнечник</option>
        </select>
    </div>

    <div style="z-index: 4;" class="sel sel--black-panther">
        <select name="select-profession" id="select-profession">
            <option value="" disabled>Сахар и продукты переработки</option>
            <option value="shrot-podsolnechnyy">Шрот подсолнечный</option>
            <option value="maslo-podsolnechnoe">Масло подсолнечное</option>
            <option value="goroh-zhelty">Сахар</option>
        </select>
    </div>

    <div class="sel sel--black-panther">
        <select name="select-profession" id="select-profession">
            <option value="" disabled>Продукция животноводства</option>
            <option value="kukuruza">Крупный рогатый скот</option>
            <option value="pshenitsa-2-klass">Птица</option>
            <option value="pshenitsa-3-klass">Молоко</option>
            <option value="yachmen">Яйца куриные</option>
        </select>
    </div>



    <?
    /*echo $value;
    echo $obl;*/

    echo GoogleChart::widget(array('visualization' => 'LineChart',
        'data' => $value,
        'options' => array('title' => 'Цена продукции')));

    ?>

    <button onclick="document.location='<?=Yii::$app->urlManager->createUrl("site/login")?>'" style="margin-top: 20px;margin-bottom: 20px;" type="button" class="btn btn-outline-secondary btn-block">Информаций для работников</button>

</div>

<script type="text/javascript">

   /* $(document).ready ( function(){
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
    });*/

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

/*            $(".sel__box__options").first().addClass("selected");
            $(".sel__placeholder").text('Кукуруза');*/
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
            url: '/site/filial',
            type: 'GET',
            data: {'obl': $(document).find("title").text(), 'product': product},
            success: function(res){
                console.log(res);
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

