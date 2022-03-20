<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Knowledge */

$this->title = Yii::t('all', 'Update Knowledge: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('all', 'Knowledges'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('all', 'Update');
?>
<div class="knowledge-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
