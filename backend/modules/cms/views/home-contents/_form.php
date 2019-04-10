<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\HomeContents */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="home-contents-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'top_title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'facebook_link')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'twitter_link')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'linkedin_link')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'youtube_link')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'google_plus')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'pinterest')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
            <?=
            $form->field($model, 'welcome_content')->widget(CKEditor::className(), [
                'options' => ['rows' => 3],
                'preset' => 'custom'
            ])
            ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'year_of_experience')->textInput() ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'welcome_image')->fileInput()->label('Welcome Image<i> (250x180)</i>') ?>
            <?php if (isset($model->welcome_image)) { ?>
                <img src="<?= Yii::$app->homeUrl ?>../uploads/home_contents/welcome_image.<?= $model->welcome_image; ?>?<?= rand() ?>" width="100"/>

                <?php
            } elseif (!empty($model->welcome_image)) {
                echo "";
            }
            ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'title1')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'title2')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'image1')->fileInput()->label('Image1<i> ( File Size : 1100x600)</i>') ?>
            <?php if (isset($model->image1)) { ?>
                <img src="<?= Yii::$app->homeUrl ?>../uploads/home_contents/image1.<?= $model->image1; ?>?<?= rand() ?>" width="300"/>

                <?php
            } elseif (!empty($model->image1)) {
                echo "";
            }
            ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'image2')->fileInput()->label('Image2<i> ( File Size : 1100x600)</i>') ?>
            <?php if (isset($model->image1)) { ?>
                <img src="<?= Yii::$app->homeUrl ?>../uploads/home_contents/image2.<?= $model->image2; ?>?<?= rand() ?>" width="300"/>

                <?php
            } elseif (!empty($model->image2)) {
                echo "";
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class='col-md-6 col-sm-12 col-xs-12 left_padd'>
            <?= $form->field($model, 'description1')->textarea(['rows' => 4]) ?>
        </div>
        <div class='col-md-6 col-sm-12 col-xs-12 left_padd'>
            <?= $form->field($model, 'description2')->textarea(['rows' => 4]) ?>
        </div>
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
            <?= $form->field($model, 'footer_address')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12'>
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-block btn-success btn-sm', 'style' => 'float:right;']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
