<?php
/* @var $this NoticiaController */
/* @var $data Noticia */
?>

 <!-- Page Content -->

 <div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">

   <p>

    <?php 
       // echo CHtml::image(Yii::app()->request->baseUrl.$data->imgnoticiaFut,"imagen",array("width"=>50));
        /* <img  src="./<?php echo $data->imgnoticiaFut;?>" class="height">*/
       // echo CHtml::image(Yii::app()->request->baseUrl.$data->imgnoticiaFut,"imagen",array("width"=>50));
    //<img src="http://placehold.it/320x150" class="img-rounded" alt="Cinque Terre" width="320" height="150">
    ?>  
     
     <img src="./<?php echo $data->imgnoticiaFut;?>" class="img-rounded" alt="Cinque Terre" width="320" height="150">

    </p>
 

        <div class="caption">
           <?php 
            /*
             <h4 class="pull-right"><?php echo CHtml::encode($data->fechanoticias); ?></h4>
            */
            ?>
            <h4><a href="<?php echo '?r=noticia/lista&id='.$url=($data->idnoticia);?>"><?php echo CHtml::encode($data->titulonoticia); ?></a>
            </h4>
            
            <p><?php 
            //limitamos la lectura
            $texto=$data->resumen;
            $contar=strlen($texto);
            $limit=150;
            if ($contar>150) {
            echo substr($texto,0,$limit)." .......";
            }else
            {
            echo $texto;
            }
            // <a target="_blank" href="<?php echo '?r=noticia/lista&id='.$url=($data->idnoticia);?">Leer..</a>
            ?>

            <a href="<?php echo '?r=noticia/lista&id='.$url=($data->idnoticia);?>">Leer..</a>

        </div>
       
    </div>
</div>