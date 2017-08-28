<?php
$this->breadcrumbs=array(
	'Representados'=>array('index'),
	$model->id_representado,
);

$this->menu=array(
	array('label'=>'List Representado', 'url'=>array('index')),
	array('label'=>'Create Representado', 'url'=>array('create')),
	array('label'=>'Update Representado', 'url'=>array('update', 'id'=>$model->id_representado)),
	array('label'=>'Delete Representado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_representado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Representado', 'url'=>array('admin')),
);
?>

<h3><?php echo $model->primer_nombre_representado.' '.$model->primer_apellido_representado; ?></h3>
<h5>Ha sido registrado satisfactoriamente</h5>
<li><?php echo CHtml::link('Registrar otro representado sin c&eacute;dula',array('representado/create')); ?></li><br>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cedula_representante',
                'cedulaRepresentante.primer_nombre_representante',
                'cedulaRepresentante.primer_apellido_representante',
		'primer_nombre_representado',
		'segundo_nombre_representado',
		'primer_apellido_representado',
		'segundo_apellido_representado',
		'fecha_nacimiento_representado',
		'idPlantel.nombre_plantel',
		'idEscolaridad.nombre_escolaridad',
		'fecha_registro_representado',
	),
)); ?>
