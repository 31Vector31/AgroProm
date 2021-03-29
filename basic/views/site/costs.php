<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use scotthuangzl\googlechart\GoogleChart;
use yii\bootstrap4\Dropdown;

?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>

<style>
    .site-costs{
        padding-top: 20px;
    }
    .datepicker {
        font-size: 0.875em;
    }

    .datepicker td, .datepicker th {
        width: 1.5em;
        height: 1.5em;
    }
</style>
<div class="site-costs">
    
    <input data-date-format="dd/mm/yyyy" id="datepicker1">
    <br><span>до</span><br>
    <input data-date-format="dd/mm/yyyy" id="datepicker2">






    <!--<div class="input-daterange input-group" id="datepicker">
        <input type="text" class="input-sm form-control" name="start" />
        <span class="input-group-addon">to</span>
        <input type="text" class="input-sm form-control" name="end" />
    </div>-->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="https://raw.githack.com/uxsolutions/bootstrap-datepicker/master/dist/locales/bootstrap-datepicker.ru.min.js"></script>

<script>
    $('#datepicker1').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        language: "ru",
        orientation: "bottom auto"
    });

    var d = new Date();
    d.setMonth(d.getMonth() - 1);
    $('#datepicker1').datepicker("setDate", d);

    $('#datepicker2').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        language: "ru",
        orientation: "bottom auto"
    });
    $('#datepicker2').datepicker("setDate", new Date());

   /*$('#sandbox-container .input-daterange').datepicker({
       language: "ru"
   });*/
</script>




