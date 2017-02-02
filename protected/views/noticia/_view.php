<?php
/* @var $this NoticiaController */
/* @var $data Noticia */
?>

 <!-- Page Content -->

 <div class="col-sm-4 col-lg-4 col-md-4">

    <div class="thumbnail">
    <div>

    <a> 
    <?php 
    $url=($data->idnoticia);
    
    $this->widget('bootstrap.widgets.TbButton',
    array(
    'label'=>'Modificar',
    'url'=>array('update&id='.$url),
    'visible'=>!Yii::app()->user->isGuest,
    ));

    ?>
        
    </a>
    </div>

    <?php 
       // echo CHtml::image(Yii::app()->request->baseUrl.$data->imgnoticiaFut,"imagen",array("width"=>50));
       /* <img  src="./<?php echo $data->imgnoticiaFut;?>" class="height">*/
       // echo CHtml::image(Yii::app()->request->baseUrl.$data->imgnoticiaFut,"imagen",array("width"=>50));
       //<img src="http://placehold.it/320x150" class="img-rounded" alt="Cinque Terre" width="320" height="150">
    ?>  
     <div>
     <img src="./<?php echo $data->imgnoticiaFut;?>" class="img-rounded" alt="Cinque Terre" width="320" height="150">
    </div>

        <div class="caption">
           <?php 
            /*
             <h4 class="pull-right"><?php echo CHtml::encode($data->fechanoticias); ?></h4>
            */
            ?>
       <a href="<?php echo '?r=noticia/lista&id='.$url=($data->idnoticia);?>"><?php echo CHtml::encode($data->titulonoticia);?>       
            </a>
            <h4>

            </h4>
            
            <p><?php 
            //limitamos la lectura
            $textoo=$data->titulonoticia;
            $contarr=strlen($textoo);

            $texto=$data->resumen;

            $cont=0;
            if ($contarr<44) 
            {
            $cont=0;
            }
            else
            {
            $cont=$contarr-25;
            }

            $contar=strlen($texto);
            $limit=(160-$cont);

            if ($contar>$limit) {

            echo substr($texto,0,$limit)." ...";
            }
            else
            {
            echo $texto;
            }
            // <a target="_blank" href="<?php echo '?r=noticia/lista&id='.$url=($data->idnoticia);?">Leer..</a>
            ?>
            <a href="<?php echo '?r=noticia/lista&id='.$url=($data->idnoticia);?>">Leer..</a>
           

        </div>
       
    </div>
</div>