<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Actorpelicula */

$this->title = 'Update Actorpelicula: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Actorpeliculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="actorpelicula-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
