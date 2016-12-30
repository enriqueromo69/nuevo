<?php
/* @var $this CategoriaController */
/* @var $model Categoria */
/* @var $form CActiveForm */
?>

<div class="form-horizontal well">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'idcategoria',array('class' =>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'idcategoria'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'categoriaDes',array('class' =>'control-label')); ?>
		<div class="controls">
			<?php echo $form->textField($model,'categoriaDes',array('size'=>45,'maxlength'=>45)); ?>
		</div>
	</div>

	<div class="control-group ">

		<div class="controls">
			<?php echo CHtml::submitButton('Buscar',array('class' =>'btn')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->