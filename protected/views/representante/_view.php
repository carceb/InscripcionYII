<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_representante')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_representante), array('view', 'id'=>$data->id_representante)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_nacionalidad')); ?>:</b>
	<?php echo CHtml::encode($data->idNacionalidad->nombre_nacionalidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_representante')); ?>:</b>
	<?php echo CHtml::encode($data->cedula_representante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primer_nombre_representante')); ?>:</b>
	<?php echo CHtml::encode($data->primer_nombre_representante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('segundo_nombre_representante')); ?>:</b>
	<?php echo CHtml::encode($data->segundo_nombre_representante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primer_apellido_representante')); ?>:</b>
	<?php echo CHtml::encode($data->primer_apellido_representante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('segundo_apellido_representante')); ?>:</b>
	<?php echo CHtml::encode($data->segundo_apellido_representante); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nacimiento_representante')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_nacimiento_representante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_municipio')); ?>:</b>
	<?php echo CHtml::encode($data->id_municipio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_representante')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_representante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_codigo_area_celular')); ?>:</b>
	<?php echo CHtml::encode($data->id_codigo_area_celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_celular_representante')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_celular_representante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_codigo_area_local')); ?>:</b>
	<?php echo CHtml::encode($data->id_codigo_area_local); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_local_representante')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_local_representante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correo_electronico_representante')); ?>:</b>
	<?php echo CHtml::encode($data->correo_electronico_representante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_plantel')); ?>:</b>
	<?php echo CHtml::encode($data->id_plantel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_escolaridad')); ?>:</b>
	<?php echo CHtml::encode($data->id_escolaridad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_estatus')); ?>:</b>
	<?php echo CHtml::encode($data->id_estatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_registro_representante')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_registro_representante); ?>
	<br />

	*/ ?>

</div>