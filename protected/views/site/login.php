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

<p>Las credenciales porfavor</p>

<div class="form-horizontal">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

<div class="control-group">
<?php echo $form->labelEx($model,'username',array('class'=>'control-label')); ?>
<div class="controls">
	<?php echo $form->textField($model,'username'); ?>
	<?php echo $form->error($model,'username'); ?>
</div>
</div>

<div class="control-group">
<?php echo $form->labelEx($model,'password',array('class'=>'control-label')); ?>
<div class="controls">
	<?php echo $form->passwordField($model,'password'); ?>
	<?php echo $form->error($model,'password'); ?>
</div>
	
</div>

<p>...</p>

<div class="control-group">
	<div class="controls">
	<?php echo CHtml::submitButton('Logeo',array('class'=>'btn btn-primary')); ?>
	</div>
</div>


<?php $this->endWidget(); ?>
</div><!-- form -->
