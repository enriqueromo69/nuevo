<?php

/**
 * This is the model class for table "noticia".
 *
 * The followings are the available columns in table 'noticia':
 * @property integer $idnoticia
 * @property string $titulonoticia
 * @property string $Fechapublinoticiascol
 * @property string $fechanoticias
 * @property string $autornoticia
 * @property string $resumen
 * @property string $descripnoticia
 * @property integer $idcategoria
 * @property string $imgnoticiaFut
 * @property string $imgnoticiaFin
 *
 * The followings are the available model relations:
 * @property Categoria $idcategoria0
 */
class Noticia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'noticia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idcategoria', 'numerical', 'integerOnly'=>true),
			array('titulonoticia, autornoticia', 'length', 'max'=>255),
			array('Fechapublinoticiascol, fechanoticias, resumen, descripnoticia, imgnoticiaFut, imgnoticiaFin', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idnoticia, titulonoticia, Fechapublinoticiascol, fechanoticias, autornoticia, resumen, descripnoticia, idcategoria, imgnoticiaFut, imgnoticiaFin', 'safe', 'on'=>'search'),
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
			'categoria' => array(self::BELONGS_TO, 'Categoria', 'idcategoria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idnoticia' => 'Idnoticia',
			'titulonoticia' => 'Titulo Noticia',
			'Fechapublinoticiascol' => 'Fecha Publicacion',
			'fechanoticias' => 'Fecha Noticia',
			'autornoticia' => 'Autor de la Noticia',
			'resumen' => 'Resumen',
			'descripnoticia' => 'Descripcion Noticia',
			'idcategoria' => 'Idcategoria',
			'imgnoticiaFut' => 'Imgnoticia Fut',
			'imgnoticiaFin' => 'Imgnoticia Fin',
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

		$criteria->compare('idnoticia',$this->idnoticia);
		$criteria->compare('titulonoticia',$this->titulonoticia,true);
		$criteria->compare('Fechapublinoticiascol',$this->Fechapublinoticiascol,true);
		$criteria->compare('fechanoticias',$this->fechanoticias,true);
		$criteria->compare('autornoticia',$this->autornoticia,true);
		$criteria->compare('resumen',$this->resumen,true);
		$criteria->compare('descripnoticia',$this->descripnoticia,true);
		$criteria->compare('idcategoria',$this->idcategoria);
		$criteria->compare('imgnoticiaFut',$this->imgnoticiaFut,true);
		$criteria->compare('imgnoticiaFin',$this->imgnoticiaFin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Noticia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
