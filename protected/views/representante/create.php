<?php
$this->breadcrumbs=array(
	'Representantes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Representante', 'url'=>array('index')),
	array('label'=>'Manage Representante', 'url'=>array('admin')),
);
?>

<h1>Crear Representante / Estudiante con c&eacute;dula</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>