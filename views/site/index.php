<?php
use yii\helpers\Html;
use  yii\web\User;
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

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

			<p><?= Html::a('List users', ['site/login'], ['class' => 'btn btn-lg btn-success']) ?></p>
			<p><?= Html::a('List loans', ['site/login'], ['class' => 'btn btn-lg btn-success']) ?></p>

		<?php
		}
		?>
    </div>

    <div class="body-content">


    </div>
</div>
