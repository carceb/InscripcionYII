<?php

/**
 * This is the model class for table "plantel".
 *
 * The followings are the available columns in table 'plantel':
 * @property string $id_plantel
 * @property string $nombre_plantel
 * @property integer $id_municipio
 *
 * The followings are the available model relations:
 * @property Municipio $idMunicipio
 * @property Estudiante[] $estudiantes
 */
class Plantel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Plantel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'plantel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_plantel', 'required'),
			array('id_municipio', 'numerical', 'integerOnly'=>true),
			array('id_plantel', 'length', 'max'=>8),
			array('nombre_plantel', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_plantel, nombre_plantel, id_municipio', 'safe', 'on'=>'search'),
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
			'idMunicipio' => array(self::BELONGS_TO, 'Municipio', 'id_municipio'),
			'estudiantes' => array(self::HAS_MANY, 'Estudiante', 'id_plantel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_plantel' => 'Id Plantel',
			'nombre_plantel' => 'Nombre Plantel',
			'id_municipio' => 'Id Municipio',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_plantel',$this->id_plantel,true);
		$criteria->compare('nombre_plantel',$this->nombre_plantel,true);
		$criteria->compare('id_municipio',$this->id_municipio);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}