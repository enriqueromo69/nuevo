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


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Noticia seleccionada </title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h1><?php echo $model->titulonoticia; ?></h1>

                <!-- Author -->
                <p class="lead">
                    Autor : <a href="#"><?php echo $model->autornoticia; ?></a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $model->Fechapublinoticiascol; ?></p>

                <hr>

                <!-- Preview Image -->
                <?php 
                /* <img class="img-responsive" src="./<?php echo $model->imgnoticiaFut;?>" alt="">
                */
                 ?>
               
				<p><?php 
				echo CHtml::image(Yii::app()->request->baseUrl.$model->imgnoticiaFut,"imagen",array("width"=>400));
			    ?></p>


                <hr>

                <!-- Post Content -->
                <p class="lead"><p><?php echo $model->resumen; ?></p></p>
                <p>
                <?php echo $model->descripnoticia; ?>
                	
                </p>

            </div>

            <!-- Blog Sidebar Widgets Column -->
        </div>

        <!-- /.row -->
         <div class="col-md-9">

                <div class="row">
                
                    <?php foreach ($getUsuarios as $model) { ?>

                    <div class="col-md-3 col-sm-2">

                    <h4><?php echo $model['titulonoticia']; ?></h4>

                    <p >
                    <?php 
                    echo CHtml::image(Yii::app()->request->baseUrl.$model['imgnoticiaFut'],"imagen",array("width"=>200));
                    ?>

                    </p>
                    <h5><?php echo CHtml::encode($model['Fechapublinoticiascol']); ?></h5>
                    <p><?php 
                    $texto=$model['resumen'];
                    $contar=strlen($texto);
                    $limit=150;
                    if ($contar>150) {
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

                    <p> <?php 
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
                    <div class="col-xs-9">
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
                    </div>
                    </div>


                </div>

            </div>
    

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
