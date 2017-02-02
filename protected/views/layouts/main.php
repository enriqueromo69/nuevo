<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo CHtml::encode($this->pageTitle); ?></title>



<?php //<link rel="stylesheet" type="text/css" href="css/Stylet.css"> ?>
<!-- Bootstrap Core CSS -->

<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/shop-homepage.css" rel="stylesheet">
<!-- Custom CSS  <link href="css/freelancer.min.css" rel="stylesheet"> -->

<style type="text/css">

	body{
		padding-top: 110px;
        }


</style>

</head>
<body>

<?php
/*
 $this->widget('bootstrap.widgets.TbNavbar',array(
//'type' => 'inverse',
'items'=>array(
array(		
	'class' => 'bootstrap.widgets.TbMenu',
	'type' => 'navbar',
	'items'=>array(
			array('label'=>'Inicio', 'url'=>array('/site/index')),
			array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
			array('label'=>'Contact', 'url'=>array('/site/contact')),
			array('label'=>'Regitrar', 'url'=>array('/site/register'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Modificar', 'url'=>array('/site/change'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Categorias', 'url'=>array('/categoria/index'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Noticias', 'url'=>array('/noticia/index')),
			array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
			array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
		),
	),
),
));
*/

/**/

$this->widget('bootstrap.widgets.TbNavbar',array(
//'type' => 'inverse',
'type'=>'inverse',
'items'=>array(
array(      
    'class' => 'bootstrap.widgets.TbMenu',
    //'type' => 'navbar',
    'type' => 'navbar',
    'items'=>array(
            array('label'=>'Inicio', 'url'=>array('/site/index')),
            array('label'=>'Acerca', 'url'=>array('/site/page', 'view'=>'about')),
            array('label'=>'Contacto', 'url'=>array('/site/contact')),
            array('label'=>'Regitrar', 'url'=>array('/site/register'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Modificar', 'url'=>array('/site/change'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Categorias', 'url'=>array('/categoria/index'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Noticias', 'url'=>array('/noticia/index')),
            array('label'=>'Digital', 'url'=>array('/site/page', 'view'=>'digital')),
            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
        ),
    ),
),
));  

  


?>

<div class="container" >
                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                   
                                    <img class="slide-image" src="./images/logo_hocicon.jpg" >
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="./images/logo_hocicon.jpg" alt="">
                                </div>
                                <div class="item">
                                <?php //http://placehold.it/800x300 ?>
                                    <img class="slide-image" src="./images/logo_hocicon.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
	
<div class="row">

            <div class="col-md-3">

                 <div class="well">
                    <h4>Portada</h4>
                    <div class="row">
                        
                    <img src="./images/logo_hocicon.jpg" class="img-thumbnail">
               
                </div>
                </div>

            <!-- Blog Search Well -->

                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                               
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

            </div>


            <div class="col-md-9">
                
                <div class="control-group">
                    <?php if(isset($this->breadcrumbs)):?>
                    <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                    'links'=>$this->breadcrumbs,
                    )); ?><!-- breadcrumbs -->
                    <?php endif?>  
                    
					<?php echo $content;                  
                    ?>
                 	
                </div>

            </div>

        </div>

 
			

			<div class="clear"></div>
	</div><!-- page -->

</body>

 <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Freelancer</h3>
                        <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    Copyright &copy; <?php echo date('Y'); ?> SOFTMATY.<br/>
                    All Rights Reserved.<br/>
                    <?php echo Yii::powered(); ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<div class="container">
	<div id="footer">
	
</div><!-- footer -->
</div>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
     <!-- jQuery -->
     <?php 

     /*
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
     */
      ?>
   
</html>


