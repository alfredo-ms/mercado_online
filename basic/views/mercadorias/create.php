<?php

use yii\helpers\Html;



/* @var $this yii\web\View */
/* @var $model app\models\Mercadorias */

$this->title = 'Nova Mercadoria';
$this->params['breadcrumbs'][] = ['label' => 'Mercadorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mercadorias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
