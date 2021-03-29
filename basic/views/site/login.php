<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Авторизация';
/*$this->params['breadcrumbs'][] = $this->title;*/
?>
<style>
.site-login{
   height: 84.5vh;
}

</style>
<div class="site-login">



    <?php /*$form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'options' => ['class' => 'text-center'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); */?><!--
        <h1><?/*= Html::encode($this->title) */?></h1>

        <?/*= $form->field($model, 'username')->textInput(['autofocus' => true]) */?>

        <?/*= $form->field($model, 'password')->passwordInput() */?>

        <?/*= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) */?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?/*= Html::submitButton('Авторизоваться', ['class' => 'btn btn-dark', 'name' => 'login-button']) */?>
            </div>
        </div>

    --><?php /*ActiveForm::end(); */?>

    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        /*'layout' => 'horizontal',*/
        'options' => ['class' => ''],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>
        <h1><?= Html::encode($this->title) ?></h1>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?/*= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) */?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Авторизоваться', ['class' => 'btn btn-dark', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

        </div>
    </div>

</div>

<script type="text/javascript">
         document.getElementsByClassName('control-label')[0].innerHTML="Логин";
         document.getElementsByClassName('control-label')[1].innerHTML="Пароль";
         /*document.getElementsByClassName('custom-control-label')[0].innerHTML="Запомнить меня";*/
</script>

