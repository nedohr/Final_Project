<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SubUsers */

$this->title = 'Update Sub Users: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sub Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sub-users-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
