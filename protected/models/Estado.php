<?php

/**
 * This is the model class for table "estado".
 *
 * The followings are the available columns in table 'estado':
 * @property integer $id_estado
 * @property string $nombre_estado
 * @property string $id_estado_bdp
 *
 * The followings are the available model relations:
 * @property CentroRegistro[] $centroRegistros
 * @property Municipio[] $municipios
 * @property CronogramaCita[] $cronogramaCitas
 * @property TblUser[] $tblUsers
 */
class Estado extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Estado the static model class
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
		return 'estado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_estado', 'required'),
			array('id_estado', 'numerical', 'integerOnly'=>true),
			array('nombre_estado', 'length', 'max'=>64),
			array('id_estado_bdp', 'length', 'max'=>16),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_estado, nombre_estado, id_estado_bdp', 'safe', 'on'=>'search'),
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
			'centroRegistros' => array(self::HAS_MANY, 'CentroRegistro', 'id_estado'),
			'municipios' => array(self::HAS_MANY, 'Municipio', 'id_estado'),
			'cronogramaCitas' => array(self::HAS_MANY, 'CronogramaCita', 'id_estado'),
			'tblUsers' => array(self::HAS_MANY, 'TblUser', 'id_estado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_estado' => 'Id Estado',
			'nombre_estado' => 'Nombre Estado',
			'id_estado_bdp' => 'Id Estado Bdp',
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

		$criteria->compare('id_estado',$this->id_estado);
		$criteria->compare('nombre_estado',$this->nombre_estado,true);
		$criteria->compare('id_estado_bdp',$this->id_estado_bdp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}