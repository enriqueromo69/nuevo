 <?php 
class ChangeForm extends CFormModel
{
	public $password;
	public $password_new;
	public $password_new_repeat ;
	
	public function rules()
	{
		return array(
			array('password, password_new, password_new_repeat','required'),
			array('password_new','compare'),
			array('password','verify'),
		);

	}
	
	
	public function verify($attribute,$params)
	{
		$model= Weblog::model()->findByPk(Yii::app()->user->id);
		if($model->passweblog!==MD5($this->password))
		{
			$this->addError('password','Contraseña Incorrecta');
		}
	}
	
	public function attributeLabels()
	{
		return array(
			'password'=>'Contraseña',
			'password_new'=>'Nueva Contraseña',
			'password_new_repeat'=>'Confirmar Contraseña',
		);
	}

	
	public function change()
	{ 
		if (!$this->hasErrors()) {
			$model= Weblog::model()->findByPk(Yii::app()->user->id);
			//declaramos passweblog por que se guardara ahi
			$model->passweblog=MD5($this->password_new);
			return $model->save();
			}	

		return false;
	}
	
}

  