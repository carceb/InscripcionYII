<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_representante'); ?>
		<?php echo $form->textField($model,'id_representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_nacionalidad'); ?>
		<?php echo $form->textField($model,'id_nacionalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cedula_representante'); ?>
		<?php echo $form->textField($model,'cedula_representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'primer_nombre_representante'); ?>
		<?php echo $form->textField($model,'primer_nombre_representante',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'segundo_nombre_representante'); ?>
		<?php echo $form->textField($model,'segundo_nombre_representante',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'primer_apellido_representante'); ?>
		<?php echo $form->textField($model,'primer_apellido_representante',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'segundo_apellido_representante'); ?>
		<?php echo $form->textField($model,'segundo_apellido_representante',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_nacimiento_representante'); ?>
		<?php echo $form->textField($model,'fecha_nacimiento_representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_municipio'); ?>
		<?php echo $form->textField($model,'id_municipio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_representante'); ?>
		<?php echo $form->textField($model,'direccion_representante',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_codigo_area_celular'); ?>
		<?php echo $form->textField($model,'id_codigo_area_celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_celular_representante'); ?>
		<?php echo $form->textField($model,'telefono_celular_representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_codigo_area_local'); ?>
		<?php echo $form->textField($model,'id_codigo_area_local'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_local_representante'); ?>
		<?php echo $form->textField($model,'telefono_local_representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correo_electronico_representante'); ?>
		<?php echo $form->textField($model,'correo_electronico_representante',array('size'=>60,'maxlength'=>100)); ?>
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
		<?php echo $form->label($model,'fecha_registro_representante'); ?>
		<?php echo $form->textField($model,'fecha_registro_representante'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->