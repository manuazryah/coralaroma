<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form form-inline">
    <?= \common\components\AlertMessageWidget::widget() ?>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-4 col-sm-4 col-xs-12 left_padd'>
            <?php $categories = \common\models\ProductCategory::find()->all(); ?>
            <?= $form->field($model, 'category')->dropDownList(\yii\helpers\ArrayHelper::map($categories, 'id', 'category'), ['prompt' => '--Select--']) ?>
        </div>
        <div class='col-md-4 col-sm-4 col-xs-12 left_padd'>
            <?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-4 col-sm-4 col-xs-12 left_padd'>
            <?= $form->field($model, 'canonical_name')->textInput(['readonly' => true]) ?>
        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
            <?=
            $form->field($model, 'description', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?=
            $form->field($model, 'dimenssions', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?=
            $form->field($model, 'features', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?=
            $form->field($model, 'coverage', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?=
            $form->field($model, 'power', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>
        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
            <?=
            $form->field($model, 'scent', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'colours[]')->fileInput(['multiple' => true, 'accept' => 'image/*'])->label('Colour Images<i> (46*46)</i>') ?>
            <div class="row">
                <?php
                if (!$model->isNewRecord) {
                    $path = Yii::getAlias('@paths') . '/product/' . $model->id . '/colours';
                    if (count(glob("{$path}/*")) > 0) {
                        $k = 0;
                        foreach (glob("{$path}/*") as $file) {
                            $k++;
                            $arry = explode('/', $file);
                            $img_nmee = end($arry);

                            $img_nmees = explode('.', $img_nmee);
                            if ($img_nmees['1'] != '') {
                                ?>

                                <div class = "col-md-2 img-box" id="<?= $k; ?>">
                                    <div class="news-img">
                                        <img class="img-responsive" src="<?= Yii::$app->homeUrl . '../uploads/product/' . $model->id . '/colours/' . end($arry) ?>">
                                        <?= Html::a('<i class="fa fa-remove"></i>', ['/cms/products/remove', 'file' => end($arry), 'id' => $model->id], ['class' => 'gal-img-remove']) ?>
                                    </div> 
                                </div>


                                <?php
                            }
                            if ($k % 6 == 0) {
                                ?>
                                <div class="clearfix"></div>
                                <?php
                            }
                        }
                    }
                }
                ?>
            </div>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'profile_image')->fileInput()->label('profile Picture<i> (1080*1080)</i>') ?>
            <?php
            if (!$model->isNewRecord) {
                ?>

                <div class = "col-md-2 img-box">
                    <a href="<?= Yii::$app->homeUrl . '../uploads/product/' . $model->id . '/profile/' . $model->canonical_name . '.' . $model->profile_image ?>" target="_blank">
                        <img src="<?= Yii::$app->homeUrl . '../uploads/product/' . $model->id . '/profile/' . $model->canonical_name . '_thumb.' . $model->profile_image ?>" width="60px" height="60px"></a>

                </div>
            <?php } ?>
        </div>
    </div>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'gallery_images[]')->fileInput(['multiple' => true, 'accept' => 'image/*'])->label('Gallery Images<i> (1080*1080)</i>') ?>
            <div class="row">
                <?php
                $path = Yii::getAlias('@paths') . '/product/' . $model->id . '/gallery';
                if (count(glob("{$path}/*")) > 0) {
                    $k = 0;
                    foreach (glob("{$path}/*") as $file) {
                        $k++;
                        $arry = explode('/', $file);
                        $img_nmee = end($arry);

                        $img_nmees = explode('.', $img_nmee);
                        if ($img_nmees['1'] != '') {
                            ?>

                            <div class = "col-md-3 img-box" id="<?= $k; ?>">
                                <div class="news-img">
                                    <a href="<?= Yii::$app->homeUrl . '../uploads/product/' . $model->id . '/gallery/' . end($arry) ?>" target="_blank">
                                        <img src="<?= Yii::$app->homeUrl . '../uploads/product/' . $model->id . '/gallery/' . end($arry) ?>" width="50px" height="50px"></a>
                                    <a  title="Delete" class="img-remove product_image" id="<?= $model->id . "@" . $img_nmee . '@' . $k; ?>" style="cursor:pointer"><i class="fa fa-remove" style="position: absolute;right: 20px;top: 3px;color: red;"></i></a>
                                </div>
                            </div>


                            <?php
                        }
                    }
                }
                ?>
            </div>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'status')->dropDownList(['1' => 'Enabled', '0' => 'Disabled']) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'meta_keyword')->textarea(['rows' => 3]) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
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
