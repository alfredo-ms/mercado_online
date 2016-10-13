<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MercadoriasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mercadorias-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'codigo') ?>

    <?= $form->field($model, 'tipo_mercadoria') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'quantidade') ?>

    <?= $form->field($model, 'preco') ?>

    <?php // echo $form->field($model, 'tipo_negocio') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
