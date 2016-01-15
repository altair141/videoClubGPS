<?php
use yii\helpers\ArrayHelper;
use app\models\Pelicula;
use app\models\Actor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Actorpelicula */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actorpelicula-form">

    <?php $form = ActiveForm::begin(); ?>
	<?= $form->field($model, 'actorid')->dropDownList(
    	ArrayHelper::map(Actor::find()->all(),'id','nombres'),
    	['prompt'=>'Seleccionar actor', 'style'=>'width:300px']
    ) ?>
    
<?= $form->field($model, 'peliculaid')->dropDownList(
    	ArrayHelper::map(Pelicula::find()->all(),'id','nombre'),
    	['prompt'=>'Seleccionar pelicula', 'style'=>'width:300px']
    ) ?>
   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
