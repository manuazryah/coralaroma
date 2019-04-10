<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ScentMarketingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Scent Marketings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scent-marketing-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body">
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?=
                    GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            [
                                'attribute' => 'image',
                                'format' => 'raw',
                                'value' => function ($data) {
                                    if (!empty($data->image)) {
                                        $img = '<img width="100" height="100" src="' . Yii::$app->homeUrl . '../uploads/scent_marketing/images/' . $data->id . '/image.' . $data->image . '"/>';
                                    } else {
                                        $img = '';
                                    }
                                    return $img;
                                },
                            ],
//                            'category',
                            'title',
                            ['class' => 'yii\grid\ActionColumn',
                                'template' => '{update}',
                            ],
                        ],
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


