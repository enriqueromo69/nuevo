<?php
/* @var $this NoticiaController */
/* @var $model Noticia */

$this->breadcrumbs=array(
	'Noticias'=>array('index'),
	$model->idnoticia,
);
/*

$this->menu=array(
	array('label'=>'List Noticia', 'url'=>array('index')),
	array('label'=>'Create Noticia', 'url'=>array('create')),
	array('label'=>'Update Noticia', 'url'=>array('update', 'id'=>$model->idnoticia)),
	array('label'=>'Delete Noticia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idnoticia),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Noticia', 'url'=>array('admin')),
);
*/
?>

<h1>Lista de  Noticia #<?php echo $model->idnoticia; ?></h1>


<?php 

//para poder cargar solo los datos mediante un echo

	$this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'idnoticia',
		'titulonoticia',
		'Fechapublinoticiascol',
		'fechanoticias',
		'autornoticia',
		'categoria.categoriaDes',
	),
));

 ?>
<div class="control-group">


<!-- Stack the columns on mobile by making one full-width and the other half-width -->
<div class="row">
  <div class="col-md-7">
  <p><?php echo $model->resumen; ?></p>
  </div>
  <div class="col-md-4">
  <p><?php echo $model->resumen; ?></p>
  </div>
</div>


<div class="row">
<div class="col-xs-12 ">
<div class="jumbotron">
<h1>...</h1>
<p><?php echo $model->descripnoticia; ?></p>

</div>
</div>
</div>



</div>
