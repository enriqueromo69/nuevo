<?php
/* @var $this NoticiassController */
/* @var $data Noticia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idnoticia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idnoticia), array('view', 'id'=>$data->idnoticia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulonoticia')); ?>:</b>
	<?php echo CHtml::encode($data->titulonoticia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fechapublinoticiascol')); ?>:</b>
	<?php echo CHtml::encode($data->Fechapublinoticiascol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechanoticias')); ?>:</b>
	<?php echo CHtml::encode($data->fechanoticias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('autornoticia')); ?>:</b>
	<?php echo CHtml::encode($data->autornoticia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resumen')); ?>:</b>
	<?php echo CHtml::encode($data->resumen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripnoticia')); ?>:</b>
	<?php echo CHtml::encode($data->descripnoticia); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('idcategoria')); ?>:</b>
	<?php echo CHtml::encode($data->idcategoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imgnoticiaFut')); ?>:</b>
	<?php echo CHtml::encode($data->imgnoticiaFut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imgnoticiaFin')); ?>:</b>
	<?php echo CHtml::encode($data->imgnoticiaFin); ?>
	<br />

	*/ ?>

</div>