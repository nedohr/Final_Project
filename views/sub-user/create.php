<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SubUsers */

$this->title = 'Add Subscriber';
$this->params['breadcrumbs'][] = ['label' => 'Sub Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-users-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
