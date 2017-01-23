<?php
/* @var $this NoticiaController */
/* @var $model Noticia */

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
       
           <?php foreach ($model as $model) { ?>
                <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">

                <p>

                <?php 
                // echo CHtml::image(Yii::app()->request->baseUrl.$modelimgnoticiaFut,"imagen",array("width"=>50));
                /* <img  src="./<?php echo $modelimgnoticiaFut;?>" class="height">*/
                // echo CHtml::image(Yii::app()->request->baseUrl.$modelimgnoticiaFut,"imagen",array("width"=>50));
                //<img src="http://placehold.it/320x150" class="img-rounded" alt="Cinque Terre" width="320" height="150">
                ?>  

                <img src="./<?php echo $model['imgnoticiaFut'];?>" class="img-rounded" alt="Cinque Terre" width="320" height="150">

                </p>


                <div class="caption">
                <?php 
                /*
                <h4 class="pull-right"><?php echo CHtml::encode($modelfechanoticias); ?></h4>
                */
                ?>
                <h4><a href="<?php echo '?r=noticia/lista&id='.$url=($model['idnoticia']);?>"><?php echo $model['titulonoticia']; ?></a>
                </h4>

                <p><?php 
                //limitamos la lectura
                $texto=$model['resumen'];
                $contar=strlen($texto);
                $limit=150;
                if ($contar>150) {
                echo substr($texto,0,$limit)." .......";
                }else
                {
                echo $texto;
                }
                // <a target="_blank" href="<?php echo '?r=noticia/lista&id='.$url=($modelidnoticia);?">Leer..</a>
                ?>

                <a href="<?php echo '?r=noticia/lista&id='.$url=($model['idnoticia']);?>">Leer..</a>

                </div>

                </div>
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
        

