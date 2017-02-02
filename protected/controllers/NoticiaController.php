<?php

class NoticiaController extends Controller
{

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
			'actions'=>array('index','view','Lista','paginacion','pagid','notii'),
			'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				//'index','view',
				'actions'=>array('create','update','admin','delete'),
				'users'=>array('@'),
			),
			
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
     _paginacion.php
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionPaginacion()
	{

		$criteria=new CDbCriteria();
		$count=Noticia::model()->count($criteria);

		//Le pasamos el total de registros de la tabla
		$pages=new CPagination($count);

		// Resultados por página
		$pages->pageSize=8;

		$pages->applyLimit($criteria);
		$getUsuarios=Noticia::model()->findAll($criteria);

		$this->render('paginacion',array(
		        "model"=>$getUsuarios,
		        "pages"=>$pages,
		    ));
	}

	public function actionPagid()
	{

		$criteria=new CDbCriteria();
		$count=Noticia::model()->count($criteria);

		//Le pasamos el total de registros de la tabla
		$pages=new CPagination($count);

		// Resultados por página
		$pages->pageSize=4;

		$pages->applyLimit($criteria);
		$getUsuarios=Noticia::model()->findAll($criteria);

		$this->render('pagid',array(
		        "model"=>$getUsuarios,
		        "pages"=>$pages,
		    ));
	}

	public function actionNotii()
	{
		$criteria=new CDbCriteria();
		$count=Noticia::model()->count($criteria);

		//Le pasamos el total de registros de la tabla
		$pages=new CPagination($count);

		// Resultados por página
		$pages->pageSize=7;

		$pages->applyLimit($criteria);
		$getUsuarios=Noticia::model()->findAll($criteria);

		$this->render('notii',array(
		        "model"=>$getUsuarios,
		        "pages"=>$pages,
		    ));
	}

	public function actionLista($id)
	{
		//$this->loadModel($id)->delete();
		$criteria=new CDbCriteria();
		$count=Noticia::model()->count($criteria);

		//Le pasamos el total de registros de la tabla
		$pages=new CPagination($count);
		//$criteria->order='Fechapublinoticiascol DESC';
		// Resultados por página
		$pages->pageSize=4;

		$pages->applyLimit($criteria);
		$getUsuarios=Noticia::model()->findAll($criteria);
		//
		/*
		$id = Yii::app()->user->getState('id');
		$criteria=new CDbCriteria;
		$criteria->compare('developer_id',$id);
		$criteria->order='status DESC';

		$models = Games::model()->findAll($criteria);
		*/
		$this->render('Lista',array(
			'model'=>$this->loadModel($id),
			"getUsuarios"=>$getUsuarios,
		    "pages"=>$pages,
		
		));
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	/*
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

	*/

	public function actionCreate()
	{
		$model=new Noticia;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Noticia']))
		{
			$rnd = rand(0,9999);  // Generamos un numero aleatorio entre 0-9999
			$rnd2 = rand(0,9999);  // Generamos un numero aleatorio entre 0-9999
			$model->attributes=$_POST['Noticia'];

			$uploadedFile=CUploadedFile::getInstance($model,'imgnoticiaFut');
            $fileName = "{$rnd}-{$uploadedFile}";  // numero aleatorio  + nombre de archivo
            $model->imgnoticiaFut = "/images/".$fileName;
            //
			$uploadedFile2=CUploadedFile::getInstance($model,'imgnoticiaFin');
			$fileName2 = "{$rnd2}-{$uploadedFile2}";  // numero aleatorio  + nombre de archivo
			$model->imgnoticiaFin = "/images/".$fileName2;
			//echo $fileName ;
			if($model->save())	{
				//$uploadedFile->saveAs(Yii::app()->basePath.'/images/'.$fileName);  // la imagen se subirá a la 
				$uploadedFile->saveAs(Yii::getPathOfAlias('webroot').'/images/'.$fileName);
				$uploadedFile2->saveAs(Yii::getPathOfAlias('webroot').'/images/'.$fileName2);
				$this->redirect(array('view','id'=>$model->idnoticia));
			}


			//$uf->saveAs(Yii::getPathOfAlias('webroot').'/images/'.$uf->getName());
		}
        
		$this->render('create',array(
			'model'=>$model,
		));
	}

	

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Noticia']))
		{
			
			//$_POST['Noticia']['imgnoticiaFut'] = $model->imgnoticiaFut;

			//$_POST['Noticia']['imgnoticiaFin'] = $model->imgnoticiaFin;
			
			$model->attributes=$_POST['Noticia'];

			$uploadedFile=CUploadedFile::getInstance($model,'imgnoticiaFut');
			$fileName = "/images/"."{$uploadedFile}"; 
			//$model->imgnoticiaFut = $fileName;
			//$model->imgnoticiaFut = ;
			if(strlen($uploadedFile)>0)
			//if(!empty($uploadedFile))
			{
			$model->imgnoticiaFut = $fileName;
			$uploadedFile->saveAs(Yii::getPathOfAlias('webroot').'/images/'.$uploadedFile->getName());
			}

			$uploadedFile2=CUploadedFile::getInstance($model,'imgnoticiaFin');
			$fileName2 ="/images/"."{$uploadedFile2}"; 
			//$model->imgnoticiaFin = "/images/".$fileName2;
			//$model->imgnoticiaFin = $fileName2;
			if(strlen($uploadedFile2)>0)
			//if(!empty($uploadedFile2))
			{
			$uploadedFile2->saveAs(Yii::getPathOfAlias('webroot').'/images/'.$uploadedFile2->getName());
			$model->imgnoticiaFin = $fileName2;
			}

			if($model->save()){
				//if(!empty($uploadedFile))  // check if uploaded file is set or not
				$this->redirect(array('view','id'=>$model->idnoticia));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{

		$model=new Noticia('search');
		//SELECT * FROM `noticia` ORDER BY `Fechapublinoticiascol` ASC
		
		$model->unsetAttributes();  // clear any default values
		$mssql = $model::model()->findBySQL('SELECT * FROM `noticia` ORDER BY `Fechapublinoticiascol` DESC');
		if(isset($_GET['Noticia']))
		$model->attributes=$_GET['Noticia'];

		$this->render('index',array(
			'model'=>$model,
			'mssql'=>$mssql,
		));
	}

	/**
	 * Manages all models.
	 */


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Noticia the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Noticia::model()->findByPk($id);
		if($model===null)
		throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Noticia $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='noticia-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

}
