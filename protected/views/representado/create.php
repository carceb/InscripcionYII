<?php
$this->breadcrumbs=array(
	'Representados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Representado', 'url'=>array('index')),
	array('label'=>'Manage Representado', 'url'=>array('admin')),
);
?>

<h1>Crear Representado sin c&eacute;dula</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>