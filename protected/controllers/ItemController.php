<?php 
class ItemController extends CController
{
   public function actionCreate()
    {
        $model=new Item;  // this is my model related to table
        $path_picture = realpath( Yii::app( )->getBasePath( )."/images/uploads" )."/";//ruta final de la imagen
 
        if(isset($_POST['Item']))
        {
             
            $model->attributes=$_POST['Item'];
 
        ////////////////////////////////////////////////////////////////////
            $rnd = rand(0,9999);  // generate random number between 0-9999
            $uploadedFile=CUploadedFile::getInstance($model,'picture');
            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name or puedes usar: $fileName=$uploadedFile->getName();
             
            if(!empty($uploadedFile))  // check if uploaded file is set or not
            {
                //$uploadedFile->saveAs(Yii::app()->basePath.'/../banner/'.$fileName);  // image will uplode to rootDirectory/banner/
                $uploadedFile->saveAs($path_picture.$fileName);
                $model->fotoprincipal= $fileName;
            }
        ////////////////////////////////////////////////////////////////////
  
            if($model->save())
            {
                 
                $this->redirect(array('index'));
            }
        }
        $this->render('create',array(
            'model'=>$model,
        ));
    }
}

?>