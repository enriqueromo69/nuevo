<?php
/* @var $this NoticiaController */
/* @var $data Noticia */
?>
<div class="control-group">
<?php 

//<div class="col-md-4 ">
 ?>
<div class="col-md-2 col-sm-2">
<h4><?php echo CHtml::encode($data->titulonoticia); ?></h4>
<p style="text-align: justify;"><?php 
		echo CHtml::image(Yii::app()->request->baseUrl.$data->imgnoticiaFut,"imagen",array("width"=>200));
    ?>    	
	    </p>
<h5><?php echo CHtml::encode($data->fechanoticias); ?></h5>
<p><?php 
$texto=$data->resumen;
$contar=strlen($texto);
$limit=310;
if ($contar>310) {
	echo substr($texto,0,$limit)." .......";
}else
{
	echo $texto;
}


?></p>
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
