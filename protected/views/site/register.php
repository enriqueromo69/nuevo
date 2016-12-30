<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' Registrarse';
$this->breadcrumbs=array(
	'Registrarse',
);
?>

<h1>Registrando Login</h1>

<?php if (Yii::app()->user->hasFlash('error')): ?>

<div class="alert">
	<?php echo Yii::app()->user->getFlash('error');?>
</div>

<?php endif ?>
 
<div class="form-horizontal">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>


<div class="control-group">
	<?php echo $form->labelEx($model,'Usuario',array('class'=>'control-label')); ?>
<div class="controls">
		<?php echo $form->textField($model,'usuweblog'); ?>
		<?php echo $form->error($model,'usuweblog'); ?>
</div>
</div>

<div class="control-group">
	<?php echo $form->labelEx($model,'Password',array('class'=>'control-label')); ?>
<div class="controls">
		<?php echo $form->passwordField($model,'passweblog'); ?>
		<?php echo $form->error($model,'passweblog'); ?>
</div>
	
</div>

<p>...</p>

<div class="control-group">

	<div class="controls">
		<?php echo CHtml::submitButton('Registrar',array('class'=>'btn btn-primary')); ?>
	</div>
	
</div>


<?php $this->endWidget(); ?>
</div><!-- form -->

