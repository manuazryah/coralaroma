<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\ScentMarketing */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="scent-marketing-form form-inline">
    <?= \common\components\AlertMessageWidget::widget() ?>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <!--        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
        <?php // $posts = \common\models\ScentCategory::find()->all(); ?>
        <?php // $form->field($model, 'category')->dropDownList(ArrayHelper::map($posts, 'id', 'category'), ['prompt' => '--Select--']) ?>
                </div>-->
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'title')->textInput(['readonly' => true]) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'canonical_name')->textInput(['readonly' => true]) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?php // $form->field($model, 'image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 1920x675 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->image)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/scent_marketing/images/<?= $model->id ?>/image.<?= $model->image; ?>?<?= rand() ?>" width="150" height="100"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'banner_image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Banner Image [ File Size :( 1920x675 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->banner_image)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/scent_marketing/banner/<?= $model->id ?>/image.<?= $model->banner_image; ?>?<?= rand() ?>" width="300" height="100"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
            <?=
            $form->field($model, 'content', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>
        </div>
        <div class='col-md-6 col-sm-12 col-xs-12 left_padd'>
            <?= $form->field($model, 'mata_title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-6 col-sm-12 col-xs-12 left_padd'>
            <?= $form->field($model, 'meta_keyword')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
            <?= $form->field($model, 'meta_description')->textarea(['rows' => 3]) ?>
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
