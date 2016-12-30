<?php
/* @var $this NoticiaController */
/* @var $model Noticia */
/* @var $form CActiveForm */
?>

<div class="form-horizontal well">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'noticia-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<div class="row">
	<div class="col-xs-12 col-md-10">
	<?php echo $form->labelEx($model,'titulonoticia');?>
	
	<?php echo $form->textField($model,'titulonoticia',array('size'=>60,'maxlength'=>255,'class'=>'col-xs-12')); ?>

	<?php echo $form->error($model,'titulonoticia'); ?>	
	
	</div>
</div>

<div class="row">

	<div class="col-xs-6 col-md-2 ">
	<?php echo $form->labelEx($model,'Fechapublinoticiascol'); ?>
	<?php //echo $form->textField($model,'Fechapublinoticiascol'); 
	$this->widget(
	'bootstrap.widgets.TbDatePicker',
	array(
	'model' => $model,
	'attribute' =>  'Fechapublinoticiascol',
	//'htmlOptions' => array('class'=>'col-md-4'),
	'options'=> 
	        array(
	            'weekStart' => 1,
	            'format'=> "yyyy-mm-dd",
	            'orientation'=> "bottom right",
	            'autoclose'=> true,
	        ), 
	));
	?>

	<?php echo $form->error($model,'Fechapublinoticiascol'); ?>

</div>

	<div class="col-xs-6 col-md-2">
		<?php echo $form->labelEx($model,'fechanoticias'); ?>
		<?php 
		//echo $form->textField($model,'fechanoticias'); 
		
		$this->widget(
		'bootstrap.widgets.TbDatePicker',
		array(
		'model' => $model,
		'attribute' =>  'fechanoticias',
		//'htmlOptions' => array('class'=>'col-md-4'),
		'options'=> 
                array(
                    'weekStart' => 1,
                    'format'=> "yyyy-mm-dd",
                    'orientation'=> "bottom right",
                    'autoclose'=> true,
                ), 
		));
		
		?>
		<?php echo $form->error($model,'fechanoticias'); ?>

	</div>
	<div class="col-xs-6 col-md-2">
		<?php echo $form->labelEx($model,'Categoria'); ?>
		<?php echo $form->dropDownList($model,'idcategoria',Categoria::toList(),array('empty'=>'Seleccione...')); ?>
		<?php echo $form->error($model,'idcategoria'); ?>

	</div>
	<div class="col-xs-6 col-md-2">
		<?php echo $form->labelEx($model,'autornoticia'); ?>
		<?php echo $form->textField($model,'autornoticia',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'autornoticia'); ?>
		
	</div>

</div>

<div class="row">
	
	<div class="col-xs-6 col-md-2">
	<?php echo $form->labelEx($model,'titulonoticia');?>
	
	<?php echo $form->textField($model,'titulonoticia',array('size'=>60,'maxlength'=>255,'class'=>'col-xs-12')); ?>

	<?php echo $form->error($model,'titulonoticia'); ?>	
	</div>


</div>

	<div >
	<?php echo $form->labelEx($model,'resumen'); ?>
	<?php //echo $form->textArea($model,'resumen',array('rows'=>6, 'cols'=>50)); 
		$this->widget(
		'bootstrap.widgets.TbCKEditor',
		array(
		'model' => $model,
		'attribute' =>  'resumen',
		)
		);
		?>
		<?php echo $form->error($model,'resumen'); ?>
	</div>


	<div >
		<?php echo $form->labelEx($model,'descripnoticia'); ?>
		<?php //echo $form->textArea($model,'descripnoticia',array('rows'=>6, 'cols'=>50)); 

		$this->widget(
		'bootstrap.widgets.TbCKEditor',
		array(
		'model' => $model,
		'attribute' =>  'descripnoticia',
		)
		);
		?>
		<?php echo $form->error($model,'descripnoticia'); ?>
	</div>

	<div class="control-group buttons">
		<div class="controls">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar',array('class'=>'btn btn-primary')); ?>
		</div>
	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->

