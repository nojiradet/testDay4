<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Com */

$this->title = 'เพิ่มคอมพิวเตอร์';
$this->params['breadcrumbs'][] = ['label' => 'คอมพิวเตอร์', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="com-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
