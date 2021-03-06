<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Knowledge */

$this->title = Yii::t('all', 'Create Knowledge');
$this->params['breadcrumbs'][] = ['label' => Yii::t('all', 'Knowledges'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="knowledge-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
