<?php

/**
 * This is the model class for table "municipio".
 *
 * The followings are the available columns in table 'municipio':
 * @property integer $id_municipio
 * @property integer $id_estado
 * @property string $nombre_municipio
 * @property string $id_municipio_bdp
 *
 * The followings are the available model relations:
 * @property Plantel[] $plantels
 * @property Estado $idEstado
 * @property Estudiante[] $estudiantes
 */
class Municipio extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Municipio the static model class
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
		return 'municipio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_municipio', 'required'),
			array('id_municipio, id_estado', 'numerical', 'integerOnly'=>true),
			array('nombre_municipio', 'length', 'max'=>128),
			array('id_municipio_bdp', 'length', 'max'=>16),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_municipio, id_estado, nombre_municipio, id_municipio_bdp', 'safe', 'on'=>'search'),
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
			'plantels' => array(self::HAS_MANY, 'Plantel', 'id_municipio'),
			'idEstado' => array(self::BELONGS_TO, 'Estado', 'id_estado'),
			'estudiantes' => array(self::HAS_MANY, 'Estudiante', 'id_municipio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_municipio' => 'Id Municipio',
			'id_estado' => 'Id Estado',
			'nombre_municipio' => 'Nombre Municipio',
			'id_municipio_bdp' => 'Id Municipio Bdp',
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

		$criteria->compare('id_municipio',$this->id_municipio);
		$criteria->compare('id_estado',$this->id_estado);
		$criteria->compare('nombre_municipio',$this->nombre_municipio,true);
		$criteria->compare('id_municipio_bdp',$this->id_municipio_bdp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}