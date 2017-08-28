<?php
$this->breadcrumbs=array(
	'Representados'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Representado', 'url'=>array('index')),
	array('label'=>'Create Representado', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('representado-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Representados</h1>

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
	'id'=>'representado-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_representado',
		'cedula_representante',
		'primer_nombre_representado',
		'segundo_nombre_representado',
		'primer_apellido_representado',
		'segundo_apellido_representado',
		/*
		'fecha_nacimiento_representado',
		'id_plantel',
		'id_escolaridad',
		'id_estatus',
		'fecha_registro_representado',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
