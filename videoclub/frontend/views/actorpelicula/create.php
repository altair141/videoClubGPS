<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Actorpelicula */

$this->title = 'Create Actorpelicula';
$this->params['breadcrumbs'][] = ['label' => 'Actorpeliculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actorpelicula-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
