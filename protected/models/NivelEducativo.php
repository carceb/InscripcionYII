<?php

/**
 * This is the model class for table "nivel_educativo".
 *
 * The followings are the available columns in table 'nivel_educativo':
 * @property integer $id_nivel_educativo
 * @property string $nombre_nivel_educativo
 *
 * The followings are the available model relations:
 * @property TipoEscolaridad[] $tipoEscolaridads
 */
class NivelEducativo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return NivelEducativo the static model class
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
		return 'nivel_educativo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_nivel_educativo', 'required'),
			array('id_nivel_educativo', 'numerical', 'integerOnly'=>true),
			array('nombre_nivel_educativo', 'length', 'max'=>64),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_nivel_educativo, nombre_nivel_educativo', 'safe', 'on'=>'search'),
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
			'tipoEscolaridads' => array(self::HAS_MANY, 'TipoEscolaridad', 'id_nivel_educativo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_nivel_educativo' => 'Id Nivel Educativo',
			'nombre_nivel_educativo' => 'Nombre Nivel Educativo',
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

		$criteria->compare('id_nivel_educativo',$this->id_nivel_educativo);
		$criteria->compare('nombre_nivel_educativo',$this->nombre_nivel_educativo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}