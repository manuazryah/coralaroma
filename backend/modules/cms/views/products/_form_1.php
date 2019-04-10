<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form form-inline">
    <?= \common\components\AlertMessageWidget::widget() ?>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
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
            <div class="row">
                <div class="col-md-12">
                    <label class="control-label" for="products-colours">Pick Your Colours</label>
                </div>
                <?php
                $colours = [];
                if (!$model->isNewRecord) {
                    if (isset($model->colours) && $model->colours != '') {
                        $model->colours = explode(',', $model->colours);
                    }
                    if (!empty($model->colours)) {
                        foreach ($model->colours as $field => $value) {
                            $colours[$value] = $value;
                        }
                    }
                }
                ?>
                <div class="col-md-10">
                    <?php
                    echo $form->field($model, 'colours')->widget(Select2::classname(), [
                        'data' => $colours,
                        'language' => 'en',
                        'options' => ['placeholder' => 'Choose Customer', 'autofocus' => 'true'],
                        'pluginOptions' => [
                            'allowClear' => true,
                            'multiple' => true
                        ],
                    ])->label(FALSE);
                    ?>
                </div>
                <div class="col-md-2">
                    <?php
                    echo $form->field($model, 'colour', [
                        'template' => "{input}"
                    ])->input('color', ['class' => "fotm-control"])
                    ?>
                </div>
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

                        <div class = "col-md-2 img-box" id="<?= $k; ?>">
                            <a href="<?= Yii::$app->homeUrl . '../uploads/product/' . $model->id . '/gallery/' . end($arry) ?>" target="_blank">
                                <img src="<?= Yii::$app->homeUrl . '../uploads/product/' . $model->id . '/gallery/' . end($arry) ?>" width="50px" height="50px"></a>
                            <a  title="Delete" class="img-remove product_image" id="<?= $model->id . "@" . $img_nmee . '@' . $k; ?>" style="cursor:pointer"><i class="fa fa-remove" style="position: absolute;left: 75px;top: 3px;"></i></a>
                        </div>


                        <?php
                    }
                }
            }
            ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'status')->dropDownList(['1' => 'Enabled', '0' => 'Disabled']) ?>
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
