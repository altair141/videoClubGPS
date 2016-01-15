<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ActorpeliculaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Actorpeliculas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actorpelicula-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Actorpelicula', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'actorid',
            'peliculaid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
