<?php

/**
 * This is the model class for table "tipo_escolaridad".
 *
 * The followings are the available columns in table 'tipo_escolaridad':
 * @property integer $id_tipo_escolaridad
 * @property string $nombre_tipo_escolaridad
 * @property integer $id_nivel_educativo
 *
 * The followings are the available model relations:
 * @property Escolaridad[] $escolaridads
 * @property NivelEducativo $idNivelEducativo
 */
class TipoEscolaridad extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return TipoEscolaridad the static model class
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
		return 'tipo_escolaridad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tipo_escolaridad', 'required'),
			array('id_tipo_escolaridad, id_nivel_educativo', 'numerical', 'integerOnly'=>true),
			array('nombre_tipo_escolaridad', 'length', 'max'=>32),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_tipo_escolaridad, nombre_tipo_escolaridad, id_nivel_educativo', 'safe', 'on'=>'search'),
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
			'escolaridads' => array(self::HAS_MANY, 'Escolaridad', 'id_tipo_escolaridad'),
			'idNivelEducativo' => array(self::BELONGS_TO, 'NivelEducativo', 'id_nivel_educativo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tipo_escolaridad' => 'Id Tipo Escolaridad',
			'nombre_tipo_escolaridad' => 'Nombre Tipo Escolaridad',
			'id_nivel_educativo' => 'Id Nivel Educativo',
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

		$criteria->compare('id_tipo_escolaridad',$this->id_tipo_escolaridad);
		$criteria->compare('nombre_tipo_escolaridad',$this->nombre_tipo_escolaridad,true);
		$criteria->compare('id_nivel_educativo',$this->id_nivel_educativo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}