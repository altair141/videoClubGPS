<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Directorpelicula */

$this->title = 'Update Directorpelicula: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Directorpeliculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="directorpelicula-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
