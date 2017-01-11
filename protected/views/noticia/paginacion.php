<?php
?>
<div class="col-xs-9">
<h2 style="display: inline;">Crud con Yii Framework</h2></div>
<div class="col-xs-3">
<a class="btn btn-success" href="<?=Yii::app()->request->baseUrl?>/crud/add">
    Mostrando noticias filtradas

</a>
</div>
<div style="clear:both"></div>
<hr/>

<div class="control-group">
<?php 

//<div class="col-md-4 ">
 ?>

<?php foreach ($model as $model) { ?>

<div class="col-md-2 col-sm-2">
<h4><?php $model['titulonoticia']; ?></h4>

<p >
<?php 
echo CHtml::image(Yii::app()->request->baseUrl.$model['imgnoticiaFut'],"imagen",array("width"=>200));
?>    	
</p>
<h5><?php echo CHtml::encode($model['fechanoticias']); ?></h5>
<p><?php 
$texto=$model['resumen'];
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
//$Link= CHtml::link(CHtml::encode("Leer"), array('view', 'id'=>$model->idnoticia)); 
//$url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];

//$url=$_SERVER['REQUEST_URI'].$_SERVER['QUERY_STRING'];

?>

<p>	<?php 
		$url=($model['idnoticia']);
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



<?php } ?>

</div>

<?php 
/*
paginacion fallida
if(!isset($_GET["page"])){
    $_GET["page"]=1;
}
//Pinta los enlaces del paginador

$this->widget(
    'CLinkPager', 
    array(
        'pages' => $pages,
        'maxButtonCount'=>'3:3', //Rango de links de paginas a mostrar 
        'header' =>'',
        'nextPageLabel'=>'Siguiente',
        'prevPageLabel'=>'Anterior',
        'firstPageLabel'=>'Primera',
        'lastPageLabel'=>'Última',
        'selectedPageCssClass'=>'active',
        'hiddenPageCssClass'=>'disable',
        'htmlOptions'=>array('class'=>'pagination'),
    )
);

*/
 ?>

<div class="pagination">

    <?php
    $this->widget('CLinkPager', array(
        'pages' => $pages,
        'maxButtonCount'=>'3:3', //Rango de links de paginas a mostrar 
        'header' => '',
        'nextPageLabel' => 'Siguiente',
        'prevPageLabel' => 'Anterior',
        'firstPageLabel'=>'Primera',
        'lastPageLabel'=>'Última',
        'selectedPageCssClass' => 'active',
        'hiddenPageCssClass' => 'disabled',
        'htmlOptions' => array(
            'class' => '',
        )
    ))
    ?>
</div>