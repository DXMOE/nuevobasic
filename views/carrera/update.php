<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Carrera */

$this->title = Yii::t('app', 'Actualizar {modelClass}: ', [
    'modelClass' => 'Carrera',
]) . $model->nombre_carrera;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Carreras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="carrera-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 'semestre' => $semestre,
    ]) ?>

</div>
