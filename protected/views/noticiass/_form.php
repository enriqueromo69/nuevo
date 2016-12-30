<?php
/* @var $this NoticiassController */
/* @var $model Noticia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'noticia-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titulonoticia'); ?>
		<?php echo $form->textField($model,'titulonoticia',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'titulonoticia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fechapublinoticiascol'); ?>
		<?php echo $form->textField($model,'Fechapublinoticiascol'); ?>
		<?php echo $form->error($model,'Fechapublinoticiascol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechanoticias'); ?>
		<?php echo $form->textField($model,'fechanoticias'); ?>
		<?php echo $form->error($model,'fechanoticias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'autornoticia'); ?>
		<?php echo $form->textField($model,'autornoticia',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'autornoticia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resumen'); ?>
		<?php echo $form->textArea($model,'resumen',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'resumen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripnoticia'); ?>
		<?php echo $form->textArea($model,'descripnoticia',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripnoticia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idcategoria'); ?>
		<?php echo $form->textField($model,'idcategoria'); ?>
		<?php echo $form->error($model,'idcategoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imgnoticiaFut'); ?>
		<?php echo $form->textArea($model,'imgnoticiaFut',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'imgnoticiaFut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imgnoticiaFin'); ?>
		<?php echo $form->textArea($model,'imgnoticiaFin',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'imgnoticiaFin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->