<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LoanUsers */

$this->title = 'Create a new user';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loan-users-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
