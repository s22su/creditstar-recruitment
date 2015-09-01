<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

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

	<h1>User loans:</h1>
	<br>

	<?= GridView::widget([
		'dataProvider' => $loans['dataProvider'],
		'filterModel' => $loans['searchModel'],
		'showOnEmpty' => false,
		'filterModel' => null,
		'columns' => [
			[
				'class' => 'yii\grid\SerialColumn'
			],

			'loanId',
			'userId',
			'amount',
			'interest',
			'duration',
			'dateApplied',
			'dateLoanEnds',
			// 'campaign',
			// 'status:boolean',

			[
				'class' => 'yii\grid\ActionColumn',
				'controller' => 'loans'
			],
		],
	]); ?>

</div>
