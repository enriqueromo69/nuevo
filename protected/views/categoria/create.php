<?php
/* @var $this CategoriaController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	'Agregar',
);
/*
$this->menu=array(
	array('label'=>'Lista Categoria', 'url'=>array('index')),
	array('label'=>'Manage Categoria', 'url'=>array('admin')),
);
*/
?> 

<h1>Creando las Categorias</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>