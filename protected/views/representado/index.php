<?php
$this->breadcrumbs=array(
	'Representados',
);

$this->menu=array(
	array('label'=>'Create Representado', 'url'=>array('create')),
	//array('label'=>'Manage Representado', 'url'=>array('admin')),
);
?>

<h1>Representados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
