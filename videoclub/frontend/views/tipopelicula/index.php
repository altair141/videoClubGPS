<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TipopeliculaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipopeliculas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipopelicula-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tipopelicula', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'categoria',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
