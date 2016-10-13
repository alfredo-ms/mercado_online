<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mercadorias */

$this->title = 'Atualização de Mercadoria: ' . $model->codigo;
$this->params['breadcrumbs'][] = ['label' => 'Mercadorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codigo, 'url' => ['view', 'id' => $model->codigo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mercadorias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
