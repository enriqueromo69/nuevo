<?php

/**
 * This is the model class for table "weblog".
 *
 * The followings are the available columns in table 'weblog':
 * @property integer $idweblog
 * @property string $Appellidos
 * @property string $correos
 * @property string $usuweblog
 * @property string $passweblog
 * @property string $estado
 */
class Weblog extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'weblog';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Appellidos, correos, usuweblog, passweblog', 'length', 'max'=>45),
			array('estado', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idweblog, Appellidos, correos, usuweblog, passweblog, estado', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idweblog' => 'Idweblog',
			'Appellidos' => 'Appellidos',
			'correos' => 'Correos',
			'usuweblog' => 'Usuweblog',
			'passweblog' => 'Passweblog',
			'estado' => 'Estado',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idweblog',$this->idweblog);
		$criteria->compare('Appellidos',$this->Appellidos,true);
		$criteria->compare('correos',$this->correos,true);
		$criteria->compare('usuweblog',$this->usuweblog,true);
		$criteria->compare('passweblog',$this->passweblog,true);
		$criteria->compare('estado',$this->estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Weblog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
