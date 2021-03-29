<?php

/* @var $this yii\web\View */

/*use scotthuangzl\googlechart\GoogleChart;*/


?>

<style>

</style>
<div class="site-product">
    <? echo $table;
   /* echo GoogleChart::widget(array('visualization' => 'LineChart',
        'data' => $value,
        'options' => array('title' => 'Средняя цена')));*/

    ?>

    <button onclick="document.location='<?=Yii::$app->urlManager->createUrl("site/login")?>'" style="margin-top: 20px;margin-bottom: 20px;" type="button" class="btn btn-outline-secondary btn-block">Информаций для работников</button>
</div>


