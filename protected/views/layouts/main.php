<!DOCTYPE html>
<html>
<head>

<title><?php echo CHtml::encode($this->pageTitle); ?></title>

<link rel="stylesheet" type="text/css" href="/nuevo/css/Style.css">

<style type="text/css">

	body{
		padding-top: 60px;
	}

</style>

</head>
<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
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
			array('label'=>'Noticias', 'url'=>array('/noticia/index'), 'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
			array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
		),
	),
),
)); ?>

		<div class="container" id="page">

			<div id="header">
				<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
			</div><!-- header -->


			<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				)); ?><!-- breadcrumbs -->
			<?php endif?>

					
			<?php echo $content; ?>

			<div class="clear"></div>

			

		</div><!-- page -->


</body>
<div class="container">
	<div id="footer">
	Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
	All Rights Reserved.<br/>
	<?php echo Yii::powered(); ?>
</div><!-- footer -->
</div>

</html>


