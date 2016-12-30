<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{

	private $_id;
	
	public function getId()
	{
		return $this->_id;
	}


	public function authenticate()
	{
		 
	 $model = Weblog::model()->findByAttributes(array('usuweblog'=>$this->username,

	 	));
	 if($model===null)
	 {
	 	$this->errorCode=self::ERROR_USERNAME_INVALID;

	 }
	 else
	 {
	 	if($model->passweblog===MD5($this->password))
	 	{
		$this->errorCode=self::ERROR_NONE;
		$this->_id=$model->idweblog;
	 	}
	 	else
	 	{
	 	$this->errorCode=self::ERROR_PASSWORD_INVALID;
	 	}

	 }

	 return !$this->errorCode;
	 }
		 /*

		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		
	
	
	if(!isset($users[$this->username]))
	$this->errorCode=self::ERROR_USERNAME_INVALID; 
	elseif($users[$this->username]!==$this->password)
	$this->errorCode=self::ERROR_PASSWORD_INVALID;
	else
	$this->errorCode=self::ERROR_NONE;
	
		return !$this->errorCode;
	}
	*/
}