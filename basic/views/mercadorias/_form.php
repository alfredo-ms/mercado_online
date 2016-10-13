<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\money\MaskMoney;

/* @var $this yii\web\View */
/* @var $model app\models\Mercadorias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mercadorias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipo_mercadoria')->textInput(['maxlength' => true, 'style'=>'width: 300px;']) ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true, 'style'=>'width: 300px;']) ?>

    <?= $form->field($model, 'quantidade')->textInput(['style'=>'width: 150px;']) ?>


    <?= $form->field($model,'preco')->
            widget(MaskMoney::className(),
                    [
                        'name' => 'preco',
                        'value' => 0.00,
                        'pluginOptions'=>['prefix'=>'R$ ',
                            'suffix'=>'',
                            'allowNegative'=>false
                        ],
                        'options' => [
                            'style' => 'width: 150px;',
                        ],
                    ])->label('Preço');
    ?>
    
    <?= $form->field($model, 'tipo_negocio')
            ->radioList(['C' => 'Compra', 'V' => 'Venda']) ?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Inserir' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
