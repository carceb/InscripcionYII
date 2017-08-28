<?php

/**
 * This is the model class for table "representante".
 *
 * The followings are the available columns in table 'representante':
 * @property integer $id_representante
 * @property integer $id_nacionalidad
 * @property string $cedula_representante
 * @property string $primer_nombre_representante
 * @property string $segundo_nombre_representante
 * @property string $primer_apellido_representante
 * @property string $segundo_apellido_representante
 * @property string $fecha_nacimiento_representante
 * @property integer $id_municipio
 * @property string $direccion_representante
 * @property integer $id_codigo_area_celular
 * @property string $telefono_celular_representante
 * @property integer $id_codigo_area_local
 * @property string $telefono_local_representante
 * @property string $correo_electronico_representante
 * @property integer $id_plantel
 * @property integer $id_escolaridad
 * @property integer $id_estatus
 * @property string $fecha_registro_representante
 *
 * The followings are the available model relations:
 * @property Nacionalidad $idNacionalidad
 * @property Municipio $idMunicipio
 * @property CodigoAreaCelular $idCodigoAreaCelular
 * @property CodigoAreaLocal $idCodigoAreaLocal
 * @property Escolaridad $idEscolaridad
 * @property Estatus $idEstatus
 * @property Plantel $idPlantel
 */
class Representante extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Representante the static model class
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
		return 'representante';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_nacionalidad, cedula_representante, primer_nombre_representante, primer_apellido_representante, fecha_nacimiento_representante, id_municipio, direccion_representante, id_codigo_area_celular, id_codigo_area_local, correo_electronico_representante, id_plantel, id_escolaridad, id_estatus', 'required'),
			array('telefono_celular_representante, telefono_local_representante, cedula_representante, id_nacionalidad, id_municipio, id_codigo_area_celular, id_codigo_area_local, id_plantel, id_escolaridad, id_estatus', 'numerical', 'integerOnly'=>true),
			array('primer_nombre_representante, segundo_nombre_representante, primer_apellido_representante, segundo_apellido_representante', 'length', 'max'=>30),
			array('direccion_representante', 'length', 'max'=>150),
			array('correo_electronico_representante', 'length', 'max'=>100),
			array('telefono_celular_representante, telefono_local_representante' , 'length', 'max'=>7),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
                        array('correo_electronico_representante', 'email'),	
                        array('id_representante, id_nacionalidad, cedula_representante, primer_nombre_representante, segundo_nombre_representante, primer_apellido_representante, segundo_apellido_representante, fecha_nacimiento_representante, id_municipio, direccion_representante, id_codigo_area_celular, telefono_celular_representante, id_codigo_area_local, telefono_local_representante, correo_electronico_representante, id_plantel, id_escolaridad, id_estatus, fecha_registro_representante', 'safe', 'on'=>'search'),
                        array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
                        array('cedula_representante', 'EsCedulaRepresentanteRegistrada', 'skipOnError'=>true),
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
			'idNacionalidad' => array(self::BELONGS_TO, 'Nacionalidad', 'id_nacionalidad'),
			'idMunicipio' => array(self::BELONGS_TO, 'Municipio', 'id_municipio'),
			'idCodigoAreaCelular' => array(self::BELONGS_TO, 'CodigoAreaCelular', 'id_codigo_area_celular'),
			'idCodigoAreaLocal' => array(self::BELONGS_TO, 'CodigoAreaLocal', 'id_codigo_area_local'),
			'idEscolaridad' => array(self::BELONGS_TO, 'Escolaridad', 'id_escolaridad'),
			'idEstatus' => array(self::BELONGS_TO, 'Estatus', 'id_estatus'),
			'idPlantel' => array(self::BELONGS_TO, 'Plantel', 'id_plantel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_representante' => 'Id Representante',
			'id_nacionalidad' => 'Id Nacionalidad',
			'cedula_representante' => 'Cédula Representante',
			'primer_nombre_representante' => 'Primer Nombre Representante',
			'segundo_nombre_representante' => 'Segundo Nombre Representante',
			'primer_apellido_representante' => 'Primer Apellido Representante',
			'segundo_apellido_representante' => 'Segundo Apellido Representante',
			'fecha_nacimiento_representante' => 'Fecha Nacimiento Representante',
			'id_municipio' => 'Id Municipio',
			'direccion_representante' => 'Dirección Representante',
			'id_codigo_area_celular' => 'Id Codigo Area Celular',
			'telefono_celular_representante' => 'Teléfono Celular Representante',
			'id_codigo_area_local' => 'Id Codigo Area Local',
			'telefono_local_representante' => 'Teléfono Local Representante',
			'correo_electronico_representante' => 'Correo Electrónico Representante',
			'id_plantel' => 'Id Plantel',
			'id_escolaridad' => 'Id Escolaridad',
			'id_estatus' => 'Id Estatus',
			'fecha_registro_representante' => 'Fecha Registro Representante',
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

		$criteria->compare('id_representante',$this->id_representante);
		$criteria->compare('id_nacionalidad',$this->id_nacionalidad);
		$criteria->compare('cedula_representante',$this->cedula_representante,true);
		$criteria->compare('primer_nombre_representante',$this->primer_nombre_representante,true);
		$criteria->compare('segundo_nombre_representante',$this->segundo_nombre_representante,true);
		$criteria->compare('primer_apellido_representante',$this->primer_apellido_representante,true);
		$criteria->compare('segundo_apellido_representante',$this->segundo_apellido_representante,true);
		$criteria->compare('fecha_nacimiento_representante',$this->fecha_nacimiento_representante,true);
		$criteria->compare('id_municipio',$this->id_municipio);
		$criteria->compare('direccion_representante',$this->direccion_representante,true);
		$criteria->compare('id_codigo_area_celular',$this->id_codigo_area_celular);
		$criteria->compare('telefono_celular_representante',$this->telefono_celular_representante,true);
		$criteria->compare('id_codigo_area_local',$this->id_codigo_area_local);
		$criteria->compare('telefono_local_representante',$this->telefono_local_representante,true);
		$criteria->compare('correo_electronico_representante',$this->correo_electronico_representante,true);
		$criteria->compare('id_plantel',$this->id_plantel);
		$criteria->compare('id_escolaridad',$this->id_escolaridad);
		$criteria->compare('id_estatus',$this->id_estatus);
		$criteria->compare('fecha_registro_representante',$this->fecha_registro_representante,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function EsCedulaRepresentanteRegistrada()
        {
            $objetoProcesos = new ProcesosEstudiantes();
            if($objetoProcesos->EsCedulaRepresentanteRegistrada($this->cedula_representante))
            {
                $this->addError('cedula_representante','Esta cédula ya esta registrada como representante.');
            }            
        }
}