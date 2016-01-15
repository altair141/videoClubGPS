<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Directorpelicula */

$this->title = 'Create Directorpelicula';
$this->params['breadcrumbs'][] = ['label' => 'Directorpeliculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="directorpelicula-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
