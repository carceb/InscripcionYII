<?php

/**
 * This is the model class for table "codigo_area_celular".
 *
 * The followings are the available columns in table 'codigo_area_celular':
 * @property integer $id_codigo_area_celular
 * @property string $nombre_codigo_area_celular
 *
 * The followings are the available model relations:
 * @property Representante[] $representantes
 */
class CodigoAreaCelular extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return CodigoAreaCelular the static model class
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
		return 'codigo_area_celular';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_codigo_area_celular', 'required'),
			array('nombre_codigo_area_celular', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_codigo_area_celular, nombre_codigo_area_celular', 'safe', 'on'=>'search'),
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
			'representantes' => array(self::HAS_MANY, 'Representante', 'id_codigo_area_celular'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_codigo_area_celular' => 'Id Codigo Area Celular',
			'nombre_codigo_area_celular' => 'Nombre Codigo Area Celular',
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

		$criteria->compare('id_codigo_area_celular',$this->id_codigo_area_celular);
		$criteria->compare('nombre_codigo_area_celular',$this->nombre_codigo_area_celular,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}