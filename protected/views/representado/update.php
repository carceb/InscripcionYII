<?php
$this->breadcrumbs=array(
	'Representados'=>array('index'),
	$model->id_representado=>array('view','id'=>$model->id_representado),
	'Update',
);

$this->menu=array(
	array('label'=>'List Representado', 'url'=>array('index')),
	array('label'=>'Create Representado', 'url'=>array('create')),
	array('label'=>'View Representado', 'url'=>array('view', 'id'=>$model->id_representado)),
	array('label'=>'Manage Representado', 'url'=>array('admin')),
);
?>

<h1>Update Representado <?php echo $model->id_representado; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>