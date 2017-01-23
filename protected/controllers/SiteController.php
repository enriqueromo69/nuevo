<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}


public function actionChange()
{
	$model= new ChangeForm;
	if (isset($_POST['ChangeForm'])) 
	{
		$model->attributes=$_POST['ChangeForm'];
		if ($model->validate()) 
		{
			
			if($model->change())
			{
				Yii::app()->user->setFlash('success','Contraseña cambiada');
			}
			else
			{
				Yii::app()->user->setFlash('error','No se cambio la Contraseña');
				$model=new ChangeForm;
			}

		}

	} 	
	$this->render('change',array('model'=>$model,));
}


public function actionRegister()
{
	$model = new Weblog;

	if (isset($_POST['Weblog'])) 
	{
		$model->attributes=$_POST['Weblog'];
		$cleanPassword=$model->passweblog;
		$model->passweblog=MD5($model->passweblog);
		
		if ($model->save()) 
		{
			$loginFrom=new LoginForm;
			$loginFrom->username=$model->usuweblog;
			$loginFrom->password=$cleanPassword;

			if ($loginFrom->login()) 
			{
				$this->redirect(array('index'));
			}	
		}
		else
		{	
			Yii::app()->user->setFlash('error','No se pudo registrar Usuario');
		}
	}

	$this->render('register',array('model'=>$model,));
}
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$criteria=new CDbCriteria();
		$count=Noticia::model()->count($criteria);

		//Le pasamos el total de registros de la tabla
		$pages=new CPagination($count);

		// Resultados por página
		$pages->pageSize=7;

		$pages->applyLimit($criteria);
		$getUsuarios=Noticia::model()->findAll($criteria);

		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index',
			array(
		    "model"=>$getUsuarios,
		    "pages"=>$pages,
		));
	}
	public function actionDigital()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('digital');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";
					//kuiver17@gmail.com adminEmail
				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Gracias por contactarnos. Nosotros responderemos a la mayor brevedad posible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}
	
	public function actionImagen()
	{
	    $model = new ImagenForm();
	     if(isset($_POST['ImagenForm']))
	    {                
	        if(isset($_FILES) and $_FILES['ImagenForm']['error']['foto']==0)
	         {
	            $uf = CUploadedFile::getInstance($model, 'foto');
	            if($uf->getExtensionName() == "jpg" || $uf->getExtensionName() == "png" ||
	                $uf->getExtensionName() == "jpeg" || $uf->getExtensionName()== "gif")
	            {
	                  $uf->saveAs(Yii::getPathOfAlias('webroot').'/images/'.$uf->getName());
	                
	                  Yii::app()->user->setFlash('noerror_imagen',"Imagen: ".$uf->getName()." Subida Correctamente");
	                  Yii::app()->user->setFlash('imagen','/images/'.$uf->getName());
	                  $this->refresh();
	            }else{
	                Yii::app()->user->setFlash('error_imagen','Imagen no valida');
	            }
	            
	         }
	    }
	    $this->render('imagen',array('model'=>$model));
	}
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}