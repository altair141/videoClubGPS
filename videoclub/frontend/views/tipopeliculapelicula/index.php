<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TipopeliculapeliculaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipopeliculapeliculas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipopeliculapelicula-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tipopeliculapelicula', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'peliculaid',
            'tipo_peliculaid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
