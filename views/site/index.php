<?php
use yii\helpers\Html;
use  yii\web\User;
/* @var $this yii\web\View */
$this->title = 'Front page';
?>
<div class="site-index">

    <div class="jumbotron">
		<?php
		if(Yii::$app->user->isGuest) {
			?>

			<p class="lead">Welcome to loan & user listing.</p>
			<p class="lead">Please log in first..</p>
			<p><?= Html::a('Login', ['site/login'], ['class' => 'btn btn-lg btn-success']) ?></p>
		<?php
		}
		else {
			?>
			<h1>Choose an action:</h1>
			<p><br></p>
			<p>
				<?= Html::a('Users', ['loanusers/index'], ['class' => 'btn btn-lg btn-success']) ?>
				<?= Html::a('Loans', ['loans/index'], ['class' => 'btn btn-lg btn-primary']) ?>
			</p>

		<?php
		}
		?>
    </div>

    <div class="body-content">


    </div>
</div>
