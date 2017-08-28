<?php
$this->breadcrumbs=array(
	'Representantes'=>array('index'),
	$model->id_representante,
);

$this->menu=array(
	array('label'=>'List Representante', 'url'=>array('index')),
	array('label'=>'Create Representante', 'url'=>array('create')),
	array('label'=>'Update Representante', 'url'=>array('update', 'id'=>$model->id_representante)),
	array('label'=>'Delete Representante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_representante),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Representante', 'url'=>array('admin')),
);
?>

<h3><?php echo $model->primer_nombre_representante.' '.$model->primer_apellido_representante.' '; ?></h3>
<h5>ha sido registrado satisfactoriamente</h5>  
<li><?php echo CHtml::link('Registrar Representado sin c&eacute;dula',array('representado/create')); ?></li><br>

</br>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'idNacionalidad.nombre_nacionalidad',
		'cedula_representante',
		'primer_nombre_representante',
		'segundo_nombre_representante',
		'primer_apellido_representante',
		'segundo_apellido_representante',
		'fecha_nacimiento_representante',
		'idMunicipio.nombre_municipio',
		'direccion_representante',
		'idCodigoAreaCelular.nombre_codigo_area_celular',
		'telefono_celular_representante',
		'idCodigoAreaLocal.nombre_codigo_area_local',
		'telefono_local_representante',
		'correo_electronico_representante',
		'idPlantel.nombre_plantel',
		'idEscolaridad.nombre_escolaridad',
		'fecha_registro_representante',
	),
)); ?>
