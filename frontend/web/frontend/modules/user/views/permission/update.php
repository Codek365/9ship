<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\user\models\Permission */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Permission',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Permissions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="permission-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
