<?php
/* @var $this NoticiassController */
/* @var $model Noticia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idnoticia'); ?>
		<?php echo $form->textField($model,'idnoticia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulonoticia'); ?>
		<?php echo $form->textField($model,'titulonoticia',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fechapublinoticiascol'); ?>
		<?php echo $form->textField($model,'Fechapublinoticiascol'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechanoticias'); ?>
		<?php echo $form->textField($model,'fechanoticias'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'autornoticia'); ?>
		<?php echo $form->textField($model,'autornoticia',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resumen'); ?>
		<?php echo $form->textArea($model,'resumen',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripnoticia'); ?>
		<?php echo $form->textArea($model,'descripnoticia',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idcategoria'); ?>
		<?php echo $form->textField($model,'idcategoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imgnoticiaFut'); ?>
		<?php echo $form->textArea($model,'imgnoticiaFut',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imgnoticiaFin'); ?>
		<?php echo $form->textArea($model,'imgnoticiaFin',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->