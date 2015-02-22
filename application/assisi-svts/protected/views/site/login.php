<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
	);
	?>

	<h1>Login</h1>

	<!-- <p>Please fill out the following form with your login credentials:</p> -->

	<div class="form">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'login-form',
			'enableClientValidation'=>true,
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
				),
				)); ?>

				<p class="note">Fields with <span class="required">*</span> are required.</p>
				
				<?php echo $form->errorSummary($model,"Please fix the following input errors:","",array('class'=>'alert alert-error')); ?>

				<div class="row">
					<?php echo $form->labelEx($model,'username'); ?>
					<?php echo $form->textField($model,'username'); ?>
					<?php /*echo $form->error($model,'username',array('class'=>'','style'=>'width:180px;'));*/ ?>
				</div>

				<div class="row">
					<?php echo $form->labelEx($model,'password'); ?>
					<?php echo $form->passwordField($model,'password'); ?>
					<?php /*echo $form->error($model,'password',array('class'=>'alert alert-error','style'=>'width:180px;'));*/ ?>
		<!-- <p class="hint">
			Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p> -->
	</div>
<div class="row buttons">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>
	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
	<p><a href="<?php echo $this->createUrl('/site/forgotpassword')?>">Forgot your password?</a></p>


	<?php $this->endWidget(); ?>
</div><!-- form -->
