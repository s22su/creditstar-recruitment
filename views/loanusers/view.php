<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LoanUsers */

$this->title = $model->userId;
$this->params['breadcrumbs'][] = ['label' => 'Loan Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loan-users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->userId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->userId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'userId',
            'firstName:ntext',
            'lastName:ntext',
            'email:ntext',
            'personalCode',
            'phone',
            'active:boolean',
            'isDead:boolean',
            'lang:ntext',
        ],
    ]) ?>

</div>
