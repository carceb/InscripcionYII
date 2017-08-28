<?php

/**
 * This is the model class for table "centro_registro".
 *
 * The followings are the available columns in table 'centro_registro':
 * @property integer $id_centro_registro
 * @property integer $id_estado
 * @property string $nombre_centro
 * @property string $id_centro_bdp
 *
 * The followings are the available model relations:
 * @property Estado $idEstado
 */
class CentroRegistro extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return CentroRegistro the static model class
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
		return 'centro_registro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_centro_registro', 'required'),
			array('id_centro_registro, id_estado', 'numerical', 'integerOnly'=>true),
			array('nombre_centro', 'length', 'max'=>128),
			array('id_centro_bdp', 'length', 'max'=>16),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_centro_registro, id_estado, nombre_centro, id_centro_bdp', 'safe', 'on'=>'search'),
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
			'idEstado' => array(self::BELONGS_TO, 'Estado', 'id_estado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_centro_registro' => 'Id Centro Registro',
			'id_estado' => 'Id Estado',
			'nombre_centro' => 'Nombre Centro',
			'id_centro_bdp' => 'Id Centro Bdp',
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

		$criteria->compare('id_centro_registro',$this->id_centro_registro);
		$criteria->compare('id_estado',$this->id_estado);
		$criteria->compare('nombre_centro',$this->nombre_centro,true);
		$criteria->compare('id_centro_bdp',$this->id_centro_bdp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}