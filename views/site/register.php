<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- register -->
	<div class="site-register">
		  <h1><?= Html::encode($this->title) ?></h1>
			<p>Register Here</p>
			<h3><?= $msg ?></h3>
			<?php $form = ActiveForm::begin([
				    'method' => 'post',
				 'enableClientValidation' => true,
				]);
			?>

				 <?= $form->field($model, "username")->input("text") ?>

				 <?= $form->field($model, "email")->input("email") ?>

				 <?= $form->field($model, "password")->input("password") ?>

				 <?= $form->field($model, "password_repeat")->input("password") ?>

				 <select name="type">
					<option value="none">Selecciona un tipo de Usuario</option>
				  <option value="user">Usuario</option>
				  <option value="refuge">Refugio</option>
				  <option value="walker">Paseador</option>
				  <option value="admin">Administrador</option>
				</select>
				<br/><br/>
				<?= Html::submitInput("Register", ['class' => 'btn btn-primary',"name" => "register"]) ?>

			<?php ActiveForm::end(); ?>

		</div>
