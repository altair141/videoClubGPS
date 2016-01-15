<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Directorpelicula */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="directorpelicula-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'directorid')->textInput() ?>

    <?= $form->field($model, 'peliculaid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
