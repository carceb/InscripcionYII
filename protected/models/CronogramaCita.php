<?php

/**
 * This is the model class for table "cronograma_cita".
 *
 * The followings are the available columns in table 'cronograma_cita':
 * @property integer $id_cronograma_cita
 * @property integer $id_estado
 * @property string $fecha_cronograma_cita
 * @property integer $max_dia
 * @property integer $disponible
 * @property boolean $activo
 * @property string $hora_inicio_cronograma_cita
 * @property string $hora_fin_cronograma_cita
 * @property string $hora_descanso_cronograma_cita
 * @property boolean $horario_corrido_activo
 *
 * The followings are the available model relations:
 * @property Cita[] $citas
 * @property Estado $idEstado
 */
class CronogramaCita extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return CronogramaCita the static model class
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
		return 'cronograma_cita';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_estado, max_dia, disponible', 'numerical', 'integerOnly'=>true),
			array('fecha_cronograma_cita, activo, hora_inicio_cronograma_cita, hora_fin_cronograma_cita, hora_descanso_cronograma_cita, horario_corrido_activo', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_cronograma_cita, id_estado, fecha_cronograma_cita, max_dia, disponible, activo, hora_inicio_cronograma_cita, hora_fin_cronograma_cita, hora_descanso_cronograma_cita, horario_corrido_activo', 'safe', 'on'=>'search'),
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
			'citas' => array(self::HAS_MANY, 'Cita', 'id_cronograma_cita'),
			'idEstado' => array(self::BELONGS_TO, 'Estado', 'id_estado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cronograma_cita' => 'Id Cronograma Cita',
			'id_estado' => 'Id Estado',
			'fecha_cronograma_cita' => 'Fecha Cronograma Cita',
			'max_dia' => 'Max Dia',
			'disponible' => 'Disponible',
			'activo' => 'Activo',
			'hora_inicio_cronograma_cita' => 'Hora Inicio Cronograma Cita',
			'hora_fin_cronograma_cita' => 'Hora Fin Cronograma Cita',
			'hora_descanso_cronograma_cita' => 'Hora Descanso Cronograma Cita',
			'horario_corrido_activo' => 'Horario Corrido Activo',
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

		$criteria->compare('id_cronograma_cita',$this->id_cronograma_cita);
		$criteria->compare('id_estado',$this->id_estado);
		$criteria->compare('fecha_cronograma_cita',$this->fecha_cronograma_cita,true);
		$criteria->compare('max_dia',$this->max_dia);
		$criteria->compare('disponible',$this->disponible);
		$criteria->compare('activo',$this->activo);
		$criteria->compare('hora_inicio_cronograma_cita',$this->hora_inicio_cronograma_cita,true);
		$criteria->compare('hora_fin_cronograma_cita',$this->hora_fin_cronograma_cita,true);
		$criteria->compare('hora_descanso_cronograma_cita',$this->hora_descanso_cronograma_cita,true);
		$criteria->compare('horario_corrido_activo',$this->horario_corrido_activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}