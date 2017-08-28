<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_representado'); ?>
		<?php echo $form->textField($model,'id_representado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cedula_representante'); ?>
		<?php echo $form->textField($model,'cedula_representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'primer_nombre_representado'); ?>
		<?php echo $form->textField($model,'primer_nombre_representado',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'segundo_nombre_representado'); ?>
		<?php echo $form->textField($model,'segundo_nombre_representado',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'primer_apellido_representado'); ?>
		<?php echo $form->textField($model,'primer_apellido_representado',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'segundo_apellido_representado'); ?>
		<?php echo $form->textField($model,'segundo_apellido_representado',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_nacimiento_representado'); ?>
		<?php echo $form->textField($model,'fecha_nacimiento_representado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_plantel'); ?>
		<?php echo $form->textField($model,'id_plantel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_escolaridad'); ?>
		<?php echo $form->textField($model,'id_escolaridad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_estatus'); ?>
		<?php echo $form->textField($model,'id_estatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_registro_representado'); ?>
		<?php echo $form->textField($model,'fecha_registro_representado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->