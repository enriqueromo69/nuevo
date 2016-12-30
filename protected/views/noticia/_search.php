<?php
/* @var $this NoticiaController */
/* @var $model Noticia */
/* @var $form CActiveForm */
?>

<div class="form-horizontal well">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'idnoticia'); ?>
		<div class="controls">
		<?php echo $form->textField($model,'idnoticia'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'titulonoticia'); ?>
		<div class="controls">
		<?php echo $form->textField($model,'titulonoticia',array('size'=>60,'maxlength'=>255)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'Fechapublinoticiascol'); ?>
		<div class="controls">
		<?php echo $form->textField($model,'Fechapublinoticiascol'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'fechanoticias'); ?>
		<div class="controls">
		<?php echo $form->textField($model,'fechanoticias'); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'autornoticia'); ?>
		<div class="controls">
		<?php echo $form->textField($model,'autornoticia',array('size'=>60,'maxlength'=>255)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'resumen'); ?>
		<div class="controls">
		<?php echo $form->textArea($model,'resumen',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'descripnoticia'); ?>
		<div class="controls">
		<?php echo $form->textArea($model,'descripnoticia',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'idcategoria'); ?>
		<div class="controls">
		<?php echo $form->dropDownList($model,'idcategoria',Categoria::toList(),array('empty'=>'Seleccione...')); ?>
		</div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
		
	</div>

<?php $this->endWidget(); ?>

	
</div><!-- search-form -->