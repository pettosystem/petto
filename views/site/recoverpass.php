<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Recover Password';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<h3><?= $msg ?></h3>

<h2>Recover Password</h2>
<?php $form = ActiveForm::begin([
    'method' => 'post',
    'enableClientValidation' => true,
]);
?>

<div class="form-group">
 <?= $form->field($model, "email")->input("email") ?>
</div>

<?= Html::submitButton("Recover Password", ["class" => "btn btn-primary"]) ?>

<?php $form->end() ?>
