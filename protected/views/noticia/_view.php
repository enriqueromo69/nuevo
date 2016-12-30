<?php
/* @var $this NoticiaController */
/* @var $data Noticia */
?>
<div class="control-group">

<div class="col-md-4 ">
<h2><?php echo CHtml::encode($data->titulonoticia); ?></h2>
<h4><?php echo CHtml::encode($data->fechanoticias); ?></h4>
<p><?php echo ($data->resumen); ?></p>
<?php 
//$Link= CHtml::link(CHtml::encode("Leer"), array('view', 'id'=>$data->idnoticia)); 
//$url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];

//$url=$_SERVER['REQUEST_URI'].$_SERVER['QUERY_STRING'];

?>
<p>	<?php 
		$url=($data->idnoticia);
		$this->widget('bootstrap.widgets.TbButton',
		array(
		
		'label'=>'Leer',
		'url'=>array('lista&id='.$url),
	)); 

		$this->widget('bootstrap.widgets.TbButton',
		array(
		
		'label'=>'Modificar',
		'url'=>array('update&id='.$url),
		'visible'=>!Yii::app()->user->isGuest,
		));

	?></p>
</div>

</div>
