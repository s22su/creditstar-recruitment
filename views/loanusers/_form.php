<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LoanUsers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loan-users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firstName')->textInput() ?>

    <?= $form->field($model, 'lastName')->textInput() ?>

    <?= $form->field($model, 'email')->textInput() ?>

    <?= $form->field($model, 'personalCode')->textInput() ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'active')->checkbox() ?>

    <?= $form->field($model, 'isDead')->checkbox() ?>

    <?= $form->field($model, 'lang')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
