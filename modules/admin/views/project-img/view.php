<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ProjectImg */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Project Imgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="project-img-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            // 'data' => [
                // 'confirm' => 'Are you sure you want to delete this item?',
                // 'method' => 'post',
            // ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            // 'catagory_id',
            [
                'attribute'=>'catagory_id',
                'label'=>"Categoriya",
                'format'=>'html',
                'value'=>function($data){
                    return $data->category->name;
                }
            ],
            // 'img',
            [
                'attribute'=>'img',
                'format'=>'html',
                'value'=>function($data){
                    return html::img(url::to('@web/imgs/'.$data->img),['width'=>'400px']);
                }
            ],
        ],
    ]) ?>

</div>
