<?php
/* @var $this CategoriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Categorias',
);

/*
//menu lateral lo desactivamos
$this->menu=array(
	array('label'=>'Create Categoria', 'url'=>array('create')),
	array('label'=>'Manage Categoria', 'url'=>array('admin')),
);
?>
*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#categoria-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

?>

<h1>Categorias</h1>

<?php 
/*
//mostramos la lista por un list view
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

*/

 ?>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php

 $this->renderPartial('_search',array(
	'model'=>$model,
));
?>
</div><!-- search-form -->

<div class="pull-right">
		<?php 

		$this->widget('bootstrap.widgets.TbButton',
		array(
		'type'=>'primary',
		'label'=>'Agregar Nuevo',
		'url'=>array('create'),
	)); 


/*
$this->widget(
'bootstrap.widgets.TbButtonGroup',
array(
    'buttons' => array(
        array('label' => 'Left', 'url' => '#create'),
      
    ),
)
);
*/
?>

<?php echo CHtml::button('Register', array('submit' => array('create'))); ?>
</div>



<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'categoria-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		array('name'=>'idcategoria', 'htmlOptions'=>array('width'=>'40')),
		'categoriaDes',
		
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); 
//'columns'=>array(
  //array('name'=>'id', 'htmlOptions'=>array('width'=>'40')),
?>

<?php 
/*
$this->widget(
    'bootstrap.widgets.TbSelect2',
    array(
        'asDropDownList' => false,
        'name' => 'clevertech',
        'options' => array(
            'tags' => array('clever', 'is', 'better', 'clevertech'),
            'placeholder' => 'type clever, or is, or just type!',
            'width' => '40%',
            'tokenSeparators' => array(',', ' ')
        )
    )
);
*/
 ?>
