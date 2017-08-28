<?php

/**
 * This is the model class for table "cita".
 *
 * The followings are the available columns in table 'cita':
 * @property integer $id_cita
 * @property integer $id_cronograma_cita
 * @property integer $id_estudiante
 *
 * The followings are the available model relations:
 * @property CronogramaCita $idCronogramaCita
 * @property Estudiante $idEstudiante
 */
class Cita extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Cita the static model class
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
		return 'cita';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_cronograma_cita, id_estudiante', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_cita, id_cronograma_cita, id_estudiante', 'safe', 'on'=>'search'),
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
			'idCronogramaCita' => array(self::BELONGS_TO, 'CronogramaCita', 'id_cronograma_cita'),
			'idEstudiante' => array(self::BELONGS_TO, 'Estudiante', 'id_estudiante'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cita' => 'Id Cita',
			'id_cronograma_cita' => 'Id Cronograma Cita',
			'id_estudiante' => 'Id Estudiante',
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

		$criteria->compare('id_cita',$this->id_cita);
		$criteria->compare('id_cronograma_cita',$this->id_cronograma_cita);
		$criteria->compare('id_estudiante',$this->id_estudiante);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}