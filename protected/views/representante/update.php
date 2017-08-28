<?php
$this->breadcrumbs=array(
	'Representantes'=>array('index'),
	$model->id_representante=>array('view','id'=>$model->id_representante),
	'Update',
);

$this->menu=array(
	array('label'=>'List Representante', 'url'=>array('index')),
	array('label'=>'Create Representante', 'url'=>array('create')),
	array('label'=>'View Representante', 'url'=>array('view', 'id'=>$model->id_representante)),
	array('label'=>'Manage Representante', 'url'=>array('admin')),
);
?>

<h1>Update Representante <?php echo $model->id_representante; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>