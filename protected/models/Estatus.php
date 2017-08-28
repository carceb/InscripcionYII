<?php

/**
 * This is the model class for table "estatus".
 *
 * The followings are the available columns in table 'estatus':
 * @property integer $id_estatus
 * @property string $nombre_estatus
 *
 * The followings are the available model relations:
 * @property Estudiante[] $estudiantes
 */
class Estatus extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Estatus the static model class
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
		return 'estatus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_estatus', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_estatus, nombre_estatus', 'safe', 'on'=>'search'),
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
			'estudiantes' => array(self::HAS_MANY, 'Estudiante', 'id_estatus'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_estatus' => 'Id Estatus',
			'nombre_estatus' => 'Nombre Estatus',
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

		$criteria->compare('id_estatus',$this->id_estatus);
		$criteria->compare('nombre_estatus',$this->nombre_estatus,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}