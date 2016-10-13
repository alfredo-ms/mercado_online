<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mercadorias */

$this->title = $model->codigo;
$this->params['breadcrumbs'][] = ['label' => 'Mercadorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mercadorias-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualiza', ['update', 'id' => $model->codigo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Deleta', ['delete', 'id' => $model->codigo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Você deseja realmente deletar essa mercadoria?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'codigo',
            'tipo_mercadoria',
            'nome',
            'quantidade',
            [
                'attribute' => 'preco',
                'format' => 'Currency',
            ],  
            [
                'attribute' => 'tipo_negocio',
                'value' => $model->tipo_negocio == 'V' ? 'Venda':'Compra',    
            ],
            
            
        ],
    ]) ?>

</div>
