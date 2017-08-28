<?php

/**
 * This is the model class for table "representado".
 *
 * The followings are the available columns in table 'representado':
 * @property integer $id_representado
 * @property integer $cedula_representante
 * @property string $primer_nombre_representado
 * @property string $segundo_nombre_representado
 * @property string $primer_apellido_representado
 * @property string $segundo_apellido_representado
 * @property string $fecha_nacimiento_representado
 * @property integer $id_plantel
 * @property integer $id_escolaridad
 * @property integer $id_estatus
 * @property string $fecha_registro_representado
 * @property string $erwer
 *
 * The followings are the available model relations:
 * @property Representante $cedulaRepresentante
 * @property Plantel $idPlantel
 * @property Escolaridad $idEscolaridad
 * @property Estatus $idEstatus
 */
class Representado extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Representado the static model class
	 */
        public $verifyCode;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'representado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula_representante, primer_nombre_representado, primer_apellido_representado, fecha_nacimiento_representado, id_plantel, id_escolaridad', 'required'),
			array('cedula_representante, id_plantel, id_escolaridad, id_estatus', 'numerical', 'integerOnly'=>true),
			array('primer_nombre_representado, segundo_nombre_representado, primer_apellido_representado, segundo_apellido_representado', 'length', 'max'=>50),
			array('erwer', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_representado, cedula_representante, primer_nombre_representado, segundo_nombre_representado, primer_apellido_representado, segundo_apellido_representado, fecha_nacimiento_representado, id_plantel, id_escolaridad, id_estatus, fecha_registro_representado, erwer', 'safe', 'on'=>'search'),
                        array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
                        array('cedula_representante', 'EsCedulaRepresentanteNoRegistrada', 'skipOnError'=>true),                    
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
			'cedulaRepresentante' => array(self::BELONGS_TO, 'Representante', 'cedula_representante'),
			'idPlantel' => array(self::BELONGS_TO, 'Plantel', 'id_plantel'),
			'idEscolaridad' => array(self::BELONGS_TO, 'Escolaridad', 'id_escolaridad'),
			'idEstatus' => array(self::BELONGS_TO, 'Estatus', 'id_estatus'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_representado' => 'Id Representado',
			'cedula_representante' => 'Cédula Representante',
			'primer_nombre_representado' => 'Primer Nombre Representado',
			'segundo_nombre_representado' => 'Segundo Nombre Representado',
			'primer_apellido_representado' => 'Primer Apellido Representado',
			'segundo_apellido_representado' => 'Segundo Apellido Representado',
			'fecha_nacimiento_representado' => 'Fecha Nacimiento Representado',
			'id_plantel' => 'Id Plantel',
			'id_escolaridad' => 'Id Escolaridad',
			'id_estatus' => 'Id Estatus',
			'fecha_registro_representado' => 'Fecha Registro Representado',
			'verifyCode'=>'Codigo de Verificación'
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

		$criteria->compare('id_representado',$this->id_representado);
		$criteria->compare('cedula_representante',$this->cedula_representante);
		$criteria->compare('primer_nombre_representado',$this->primer_nombre_representado,true);
		$criteria->compare('segundo_nombre_representado',$this->segundo_nombre_representado,true);
		$criteria->compare('primer_apellido_representado',$this->primer_apellido_representado,true);
		$criteria->compare('segundo_apellido_representado',$this->segundo_apellido_representado,true);
		$criteria->compare('fecha_nacimiento_representado',$this->fecha_nacimiento_representado,true);
		$criteria->compare('id_plantel',$this->id_plantel);
		$criteria->compare('id_escolaridad',$this->id_escolaridad);
		$criteria->compare('id_estatus',$this->id_estatus);
		$criteria->compare('fecha_registro_representado',$this->fecha_registro_representado,true);
		$criteria->compare('erwer',$this->erwer,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

        public function EsCedulaRepresentanteNoRegistrada()
        {
            $objetoProcesos = new ProcesosEstudiantes();
            if($objetoProcesos->EsCedulaRepresentanteRegistrada($this->cedula_representante)== false)
            {
                $this->addError('cedula_representante','Esta cédula no esta registrada como representante.');
            }            
        }            
}