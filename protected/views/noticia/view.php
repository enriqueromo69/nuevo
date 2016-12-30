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

<h1>Detalle de  Noticia #<?php echo $model->idnoticia; ?></h1>

<?php 

	$echo= 'hola';
	$this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idnoticia',
		'titulonoticia',
		'Fechapublinoticiascol',
		'fechanoticias',
		'autornoticia',
		//'resumen',
		//'descripnoticia',
		'categoria.categoriaDes',
	),
)); ?>

<?php 

//para poder cargar solo los datos mediante un echo
//echo $model->resumen;
 ?>

<?php //echo $model->resumen; ?>
 <div class="control-group">
  <div class="col-xs-12 col-sm-6 col-md-8"><?php echo $model->resumen; ?></div>
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
</div>

<?php 
  echo "<ul>";
   foreach(Noticia::model()->findAll() as $u){

      $id = $u->titulonoticia;
      $nom = $u->Fechapublinoticiascol;
       echo "<li>{$id}  - {$nom}</li>";
  }
  echo "</ul>";
?>