<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Loans */

$this->title = $model->loanId;
$this->params['breadcrumbs'][] = ['label' => 'Loans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
	<div class="col-lg-6 loans-view">

		<h1>Loan id: <?= Html::encode($this->title) ?></h1>

		<p>
			<?= Html::a('Update', ['update', 'id' => $model->loanId], ['class' => 'btn btn-primary']) ?>
			<?= Html::a('Delete', ['delete', 'id' => $model->loanId], [
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
				'loanId',
				'userId',
				'amount',
				'interest',
				'duration',
				'dateApplied',
				'dateLoanEnds',
				'campaign',
				'status:boolean',
			],
		]) ?>

	</div>

	<div class="col-lg-6 loan-users-view">

		<h1>User: <?= $user->firstName; ?> <?= $user->lastName; ?> (<?= Html::encode($user->userId) ?>)</h1>

		<p>
			<?= Html::a('Update', ['update', 'id' => $user->userId], ['class' => 'btn btn-primary']) ?>
			<?= Html::a('Delete', ['delete', 'id' => $user->userId], [
				'class' => 'btn btn-danger',
				'data' => [
					'confirm' => 'Are you sure you want to delete this item?',
					'method' => 'post',
				],
			]) ?>
		</p>

		<?= DetailView::widget([
			'model' => $user,
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

</div>