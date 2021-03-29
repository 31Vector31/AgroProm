<?php

/* @var $this yii\web\View */

/*use yii\helpers\Html;
use yii\helpers\Url;
use scotthuangzl\googlechart\GoogleChart;
use yii\bootstrap4\Dropdown;*/

?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>

<link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
<script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
<style>
    .nav-tabs > .nav-item > .nav-link {

}
    .tab-content{
        padding-top: 20px;

    }
    .datepicker {
        font-size: 0.875em;
    }

    .datepicker td, .datepicker th {
        width: 1.5em;
        height: 1.5em;
    }


    .hue{
        padding: 10px;
        /*border: 1px solid grey;*/

        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        border:#d3d3d3 solid 1px;
        background: #fff;
        color: black;
        font-size: smaller;
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .treeHTML { /* вся форма */
        line-height: normal;
    }
    .treeHTML label { /* пункты и соединяющие их линии */
        position: relative;
        display: block;
        padding: 0 0 0 1.2em;
    }
    .treeHTML label:not(:nth-last-of-type(1)) {
        border-left: 1px solid #94a5bd;
    }
    .treeHTML label:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 1.1em;
        height: .5em;
        border-bottom: 1px solid #94a5bd;
    }
    .treeHTML label:nth-last-of-type(1):before {
        border-left: 1px solid #94a5bd;
    }
    .treeHTML fieldset,
    .treeHTML fieldset[class=""] .razvernut { /* списки */
        position: absolute;
        visibility: hidden;
        margin: 0;
        padding: 0 0 0 2em;
        border: none;
    }
    .treeHTML fieldset:not(:last-child) {
        border-left: 1px solid #94a5bd;
    }
    .treeHTML .razvernut {
        position: relative;
        visibility: visible;
    }
    .treeHTML > fieldset > legend,
    .treeHTML .razvernut > fieldset > legend { /* плюс */
        position: absolute;
        left: -5px;
        top: 0;
        height: 7px;
        width: 7px;
        margin-top: -1em;
        padding: 0;
        border: 1px solid #94a5bd;
        border-radius: 2px;
        background-repeat: no-repeat;
        background-position: 50% 50%;
        background-color: #fff;
        background-image: linear-gradient(to left, #1b4964, #1b4964), linear-gradient(#1b4964, #1b4964), linear-gradient(315deg, #a0b6d8, #e8f3ff 60%, #fff 60%);
        background-size: 1px 5px, 5px 1px, 100% 100%;
        visibility: visible;
        cursor: pointer;
    }
    .treeHTML fieldset[class=""] .razvernut fieldset legend {
        visibility: hidden;
    }
    .treeHTML .razvernut > legend { /* минус */
        background-image: linear-gradient(#1b4964, #1b4964) !important;
        background-size: 5px 1px !important;
    }

</style>
<div style="height: 84.5vh;" class="site-analysis">
    <!--<ul class="nav nav-tabs">
        <li class="nav-item">
            <a aria-label="income" class="nav-link active" >Доходы</a>
        </li>
        <li class="nav-item">
            <a aria-label="costs" class="nav-link" >Расходы</a>
        </li>

    </ul>-->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="costs-tab" data-toggle="tab" href="#costs" role="tab" aria-controls="costs" aria-selected="true">Расходы</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="income-tab" data-toggle="tab" href="#income" role="tab" aria-controls="income" aria-selected="false">Доходы</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="costs" role="tabpanel" aria-labelledby="costs-tab">

            <div class="container-fluid">
                <div class="row">
                    <div style=" " class="col-3">
                        <div>
                        <input style="width: 100%;" data-date-format="dd/mm/yyyy" id="datepicker21">
                        <br><span>до</span><br>
                        <input style="width: 100%;" data-date-format="dd/mm/yyyy" id="datepicker22">
                        </div>

                        <br>
                        <h4>Статьи</h4>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Энергия</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Семена</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Удобрения</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Средства защиты</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Другое</label>
                        </div>

                        <br>
                        <h4>Продукция</h4>

                        <form name="Tree1" class="treeHTML" class="razvernut">
                            <label><input type="checkbox"> Растениеводство</label>
                            <fieldset><legend></legend>
                                <label><input type="checkbox"> Кукуруза</label>
                                <label><input type="checkbox"> Пшеница 2 класс</label>
                                <label><input type="checkbox"> Пшеница 3 класс</label>
                                <label><input type="checkbox"> Ячмень</label>
                            </fieldset>

                            <label><input type="checkbox"> Животноводство</label>
                            <fieldset><legend></legend>
                                <label><input type="checkbox"> Крупный рогатый скот</label>
                                <label><input type="checkbox"> Птица</label>
                                <label><input type="checkbox"> Молоко</label>
                                <label><input type="checkbox"> Яйца куриные</label>
                            </fieldset>

                            <label><input type="checkbox"> Переработка сои</label>
                            <fieldset><legend></legend>
                                <label><input type="checkbox"> Соя</label>
                                <label><input type="checkbox"> Рапс</label>
                                <label><input type="checkbox"> Подсолнечник</label>
                            </fieldset>

                            <label><input type="checkbox"> Сахар и переработка</label>
                            <fieldset><legend></legend>
                                <label><input type="checkbox"> Сахар</label>
                                <label><input type="checkbox"> Масло подсолнечное</label>
                                <label><input type="checkbox"> Шрот подсолнечный</label>
                            </fieldset>
                        </form>

                    </div>

                    <div style="" class="col-5">
                        <h1>15,456,466 грн</h1>
                        <div class="ct-chart ct-perfect-fourth"></div>
                    </div>

                    <div style="" class="col-4">
                        Одна из трёх колонок
                    </div>
                </div>
            </div>

        </div>

        <div class="tab-pane fade" id="income" role="tabpanel" aria-labelledby="income-tab">
            <input data-date-format="dd/mm/yyyy" id="datepicker11">
            <br><span>до</span><br>
            <input data-date-format="dd/mm/yyyy" id="datepicker12">


        </div>
    </div>

<div id="content"></div>
    <!--style="border: 1px solid black"-->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="https://raw.githack.com/uxsolutions/bootstrap-datepicker/master/dist/locales/bootstrap-datepicker.ru.min.js"></script>
<script>
    new Chartist.Bar('.ct-chart', {
        labels: ['First quarter of the year', 'Second quarter of the year', 'Third quarter of the year', 'Fourth quarter of the year'],
        series: [
            [60000, 40000, 80000, 70000],
            [40000, 30000, 70000, 65000],
            [8000, 3000, 10000, 6000]
        ]
    }, {
        seriesBarDistance: 10,
        axisX: {
            offset: 60
        },
        axisY: {
            offset: 80,
            labelInterpolationFnc: function(value) {
                return value /*+ ' CHF'*/
            },
            scaleMinSpace: 15
        }
    });
    /*$('.nav-tabs > .nav-item > .nav-link').click(function() {

        $('.nav-tabs > .nav-item > .nav-link').each(function() {
            $(this).removeClass('active');
        });

        $(this).addClass('active');

        $.ajax({
            url: '/site/analysis_content',
            type: 'GET',
            data: {'request': $(this).attr('aria-label')},
            success: function(res){
                console.log(res);
                $('#content').html(res);
            },
            error: function(){
                alert('Error!');
            }
        });

        $.ajax({
            url: '/site/analysis_content',
            type: 'GET',
            data: {'request': $(this).attr('aria-label')},
            success: function(res){
                console.log(res);
                $('#content').html(res);
            },
            error: function(){
                alert('Error!');
            }
        });
    });*/

    var t = document.forms.Tree1;
    [].forEach.call(t.querySelectorAll('fieldset'), function(eFieldset) {
        var main = [].filter.call(t.querySelectorAll('[type="checkbox"]'), function(element) {return element.parentNode.nextElementSibling == eFieldset;});
        main.forEach(function(eMain) {
            var l = [].filter.call(eFieldset.querySelectorAll('legend'), function(e) {return e.parentNode == eFieldset;});
            l.forEach(function(eL) {
                var all = eFieldset.querySelectorAll('[type="checkbox"]');
                eL.onclick = Razvernut;
                eFieldset.onchange = Razvernut;
                function Razvernut() {
                    var allChecked = eFieldset.querySelectorAll('[type="checkbox"]:checked').length;
                    eMain.checked = allChecked == all.length;
                    eMain.indeterminate = allChecked > 0 && allChecked < all.length;
                    if (eMain.indeterminate || eMain.checked || ((eFieldset.className == '') && (allChecked == "0"))) {
                        eFieldset.className = 'razvernut';
                    } else {
                        eFieldset.className = '';
                    }
                }
                eMain.onclick = function() {
                    for(var i=0; i<all.length; i++)
                        all[i].checked = this.checked;
                    if (this.checked) {
                        eFieldset.className = 'razvernut';
                    } else {
                        eFieldset.className = '';
                    }
                }
            });
        });
    });

    $('#datepicker11').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        language: "ru",
        orientation: "bottom auto"
    });

    var d = new Date();
    d.setMonth(d.getMonth() - 1);
    $('#datepicker11').datepicker("setDate", d);


    $('#datepicker12').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        language: "ru",
        orientation: "bottom auto"
    });
    $('#datepicker12').datepicker("setDate", new Date());


    $('#datepicker21').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        language: "ru",
        orientation: "bottom auto"
    });

    var d = new Date();
    d.setMonth(d.getMonth() - 1);
    $('#datepicker21').datepicker("setDate", d);

    $('#datepicker22').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        language: "ru",
        orientation: "bottom auto"
    });
    $('#datepicker22').datepicker("setDate", new Date());
</script>


