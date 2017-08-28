<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_representado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_representado), array('view', 'id'=>$data->id_representado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_representante')); ?>:</b>
	<?php echo CHtml::encode($data->cedula_representante); ?>
	<br />
        <b>
            <?php echo CHtml::encode($data->getAttributeLabel('cedula_representante')); ?>:</b>
            <?php echo CHtml::encode($data->cedulaRepresentante->primer_nombre_representado).' '.$data->cedulaRepresentante->primer_apellido_representado; ?>        
        </br>

	<b><?php echo CHtml::encode($data->getAttributeLabel('primer_nombre_representado')); ?>:</b>
	<?php echo CHtml::encode($data->primer_nombre_representado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('segundo_nombre_representado')); ?>:</b>
	<?php echo CHtml::encode($data->segundo_nombre_representado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primer_apellido_representado')); ?>:</b>
	<?php echo CHtml::encode($data->primer_apellido_representado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('segundo_apellido_representado')); ?>:</b>
	<?php echo CHtml::encode($data->segundo_apellido_representado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nacimiento_representado')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_nacimiento_representado); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_plantel')); ?>:</b>
	<?php echo CHtml::encode($data->id_plantel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_escolaridad')); ?>:</b>
	<?php echo CHtml::encode($data->id_escolaridad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_estatus')); ?>:</b>
	<?php echo CHtml::encode($data->id_estatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_registro_representado')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_registro_representado); ?>
	<br />

	*/ ?>

</div>