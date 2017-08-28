<?php

/**
 * This is the model class for table "nacionalidad".
 *
 * The followings are the available columns in table 'nacionalidad':
 * @property integer $id_nacionalidad
 * @property string $nombre_nacionalidad
 *
 * The followings are the available model relations:
 * @property Representante[] $representantes
 */
class Nacionalidad extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Nacionalidad the static model class
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
		return 'nacionalidad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_nacionalidad', 'required'),
			array('nombre_nacionalidad', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_nacionalidad, nombre_nacionalidad', 'safe', 'on'=>'search'),
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
			'representantes' => array(self::HAS_MANY, 'Representante', 'id_nacionalidad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_nacionalidad' => 'Id Nacionalidad',
			'nombre_nacionalidad' => 'Nombre Nacionalidad',
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

		$criteria->compare('id_nacionalidad',$this->id_nacionalidad);
		$criteria->compare('nombre_nacionalidad',$this->nombre_nacionalidad,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}