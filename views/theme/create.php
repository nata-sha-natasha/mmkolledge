<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Theme */

$this->title = Yii::t('all', 'Create Theme');
$this->params['breadcrumbs'][] = ['label' => Yii::t('all', 'Themes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="theme-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
