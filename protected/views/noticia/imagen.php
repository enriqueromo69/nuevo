<?php
$this->pageTitle=Yii::app()->name . ' - Subir Imagen';
$this->breadcrumbs=array(
	'Subir Imagen',
);
?>

<h1>¿Como subir una Imagen con Yii?</h1>
<?php if(Yii::app()->user->hasFlash("error_imagen")){?>
<div class="flash-error">
    <?php echo Yii::app()->user->getFlash("error_imagen"); ?>   
</div>
<?php }?>
<?php if(Yii::app()->user->hasFlash("noerror_imagen")){?>
<div class="flash-success">    
    <?php echo Yii::app()->user->getFlash("noerror_imagen"); ?>    
</div>
<?php }?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'imagen-form',
	'enableClientValidation'=>true,
        'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Los Campos con<span class="required">*</span> Son obligatorios.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'foto'); ?>
		<div>
		<?php echo $form->fileField($model,'foto'); ?>
		</div>
		
		<?php 
		//echo CHtml::image(Yii::app()->request->baseUrl."".Yii::app()->user->getFlash("imagen"));
		//cargamos la imagen
		?> 
		<?php echo $form->error($model,'foto'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Subir Imagen'); ?>
	</div>


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


<?php $this->endWidget(); ?>
</div><!-- form -->
<?php if(Yii::app()->user->hasFlash("imagen")){?>
<div class="flash-success">    
    <?php echo CHtml::image(Yii::app()->request->baseUrl."".Yii::app()->user->getFlash("imagen"));?>    
</div>
<?php }?>