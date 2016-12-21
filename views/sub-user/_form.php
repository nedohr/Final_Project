<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SubUsers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sub-users-form">

   

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for registering with us. A confirmation email has been sent to the email you provided. 
        </div>

    <?php else: ?>


        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'firstName')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'lastName')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>

    <?php ActiveForm::end(); ?>
            </div>
        </div>

    <?php endif; ?>
    
   
     

</div>
