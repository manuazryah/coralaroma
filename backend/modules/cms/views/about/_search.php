<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AboutSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'about_content') ?>

    <?= $form->field($model, 'year_of_experience') ?>

    <?= $form->field($model, 'image') ?>

    <?= $form->field($model, 'image_title') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'why_coral_aroma') ?>

    <?php // echo $form->field($model, 'director_name') ?>

    <?php // echo $form->field($model, 'director_image') ?>

    <?php // echo $form->field($model, 'director_message') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'CB') ?>

    <?php // echo $form->field($model, 'UB') ?>

    <?php // echo $form->field($model, 'DOC') ?>

    <?php // echo $form->field($model, 'DOU') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
