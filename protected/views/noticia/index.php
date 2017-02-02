<?php
/* @var $this NoticiaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Noticias',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#noticia-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

?>

<h1>Noticias</h1>

<?php
/* $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
*/
?>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class="pull-right">
<?php 

	$this->widget('bootstrap.widgets.TbButton',
	array(
	'type'=>'primary',
	'label'=>'Agregar Nuevo',
	'url'=>array('create'),
	'visible'=>!Yii::app()->user->isGuest,
)); 

	
?>

</div>

<?php 
/*
	$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'noticia-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array('name'=>'idnoticia', 'htmlOptions'=>array('width'=>'40')),
		'titulonoticia',
		array('name'=>'Fechapublinoticiascol', 'htmlOptions'=>array('width'=>'100')),
		array('name'=>'fechanoticias', 'htmlOptions'=>array('width'=>'100')),
		'autornoticia',
		'resumen',		
		//'descripnoticia',
		//'idcategoria',		
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); 
*/
//$model->resumen,

//echo $model->resumen;

?>
<div class="controls">
<?php 
/*
foreach($model as $models){
echo CHTML::encode($models);  
}
*/

?>

<?php $this->widget('bootstrap.widgets.TbListView', array(
 'dataProvider'=>$model->search(),
 'itemView'=>'_view',
)); ?>

</div>