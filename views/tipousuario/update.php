<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tipousuario */

$this->title = Yii::t('app', 'Actualizar {modelClass}: ', [
    'modelClass' => 'Tipo usuario',
]) . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tipousuarios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tipousuario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
