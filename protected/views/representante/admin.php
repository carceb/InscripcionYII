<?php
$this->breadcrumbs=array(
	'Representantes / Estudiantes con c&eacute;dula'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List Representante', 'url'=>array('index')),
	array('label'=>'Crear Representante / Estudiantes con c&eacute;dula', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('representante-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Representantes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'representante-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_representante',
		'id_nacionalidad',
		'cedula_representante',
		'primer_nombre_representante',
		'segundo_nombre_representante',
		'primer_apellido_representante',
		/*
		'segundo_apellido_representante',
		'fecha_nacimiento_representante',
		'id_municipio',
		'direccion_representante',
		'id_codigo_area_celular',
		'telefono_celular_representante',
		'id_codigo_area_local',
		'telefono_local_representante',
		'correo_electronico_representante',
		'id_plantel',
		'id_escolaridad',
		'id_estatus',
		'fecha_registro_representante',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
