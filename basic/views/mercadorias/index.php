<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MercadoriasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mercadorias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mercadorias-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Nova Mercadoria', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'codigo',
            'tipo_mercadoria',
            'nome',
            'quantidade',
            [
                'format' => 'Currency',
                'attribute' => 'preco',
            ],  
            [
                'attribute' => 'tipo_negocio',
                'value' => function($model, $key, $index, $widget) {
                    if ($model->tipo_negocio == 'V')
                        return 'Venda';
                    else
                        return 'Compra';
                }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
