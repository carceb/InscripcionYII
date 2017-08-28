<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'representante-form',
	'enableAjaxValidation'=>true,
)); ?>

    
    <p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
                <?php echo $form->labelEx($model,'Nacionalidad'); ?>        
                <?php echo $form->dropDownList($model,'id_nacionalidad',CHtml::listData(Nacionalidad::model()->findAll(),
                'id_nacionalidad','nombre_nacionalidad')); ?>            
		<?php echo $form->error($model,'id_nacionalidad'); ?>
	</div>

        
	<div class="row">
		<?php echo $form->labelEx($model,'cedula_representante'); ?>
		<?php echo $form->textField($model,'cedula_representante'); ?>
		<?php echo $form->error($model,'cedula_representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primer_nombre_representante'); ?>
		<?php echo $form->textField($model,'primer_nombre_representante',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'primer_nombre_representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'segundo_nombre_representante'); ?>
		<?php echo $form->textField($model,'segundo_nombre_representante',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'segundo_nombre_representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primer_apellido_representante'); ?>
		<?php echo $form->textField($model,'primer_apellido_representante',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'primer_apellido_representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'segundo_apellido_representante'); ?>
		<?php echo $form->textField($model,'segundo_apellido_representante',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'segundo_apellido_representante'); ?>
	</div>

	<div class="row">

            <?php echo $form->labelEx($model,'Fecha Nacimiento Representante'); ?>
                <p>año-mes-dia (ejemplo: 2000-11-15)</p>
            <?php echo CHtml::activeTextField($model,'fecha_nacimiento_representante',array("id"=>"fecha_nacimiento_representante")); ?>
            <?php echo CHtml::image("images/calendar-button.gif","calendar",
            array("id"=>"c_button_1","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'fecha_nacimiento_representante',
                    'button'=>'c_button_1',
                    'ifFormat'=>'%Y-%m-%d',
                    'language'=>'es',
                ));
                ?>
                    
		<?php echo $form->error($model,'fecha_nacimiento_representante'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'direccion_representante'); ?>
		<?php echo $form->textField($model,'direccion_representante',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'direccion_representante'); ?>
	</div>


        
	<div class="row">
		<?php echo $form->labelEx($model,'Código celular'); ?>
                <?php echo $form->dropDownList($model,'id_codigo_area_celular',CHtml::listData(CodigoAreaCelular::model()->findAll(),
                'id_codigo_area_celular','nombre_codigo_area_celular')); ?>            
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_celular_representante'); ?>
		<?php echo $form->textField($model,'telefono_celular_representante'); ?>
		<?php echo $form->error($model,'telefono_celular_representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Código Local'); ?>
                <?php echo $form->dropDownList($model,'id_codigo_area_local',CHtml::listData(CodigoAreaLocal::model()->findAll(),
                'id_codigo_area_local','nombre_codigo_area_local')); ?>   
		<?php echo $form->error($model,'id_codigo_area_local'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_local_representante'); ?>
		<?php echo $form->textField($model,'telefono_local_representante'); ?>
		<?php echo $form->error($model,'telefono_local_representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correo_electronico_representante'); ?>
		<?php echo $form->textField($model,'correo_electronico_representante',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'correo_electronico_representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Plantel'); ?>
                <?php echo $form->dropDownList($model,'id_plantel',CHtml::listData(Plantel::model()->findAll(),
                'id_plantel','nombre_plantel')); ?>   
		<?php echo $form->error($model,'id_plantel'); ?>
	</div>

   <!-- INICIO estado municipio       *******************************    -->
    
    <div class="row">
        <?php

            $estado_list = Estado::model()->findAll();
            $estado_select = '';
            if (isset($_POST['Representante'])){
                $municipio = Municipio::model()->findByPk($_POST['Representante']['id_municipio']);
                $municipio_list = Municipio::model()->findAll("id_estado=:FK",array(':FK'=>$municipio->id_estado));
                $estado_select= $municipio->id_estado;
            }else{
                $municipio_list = Municipio::model()->findAll("id_estado=:FK",array(':FK'=>$estado_list[0]->id_estado));
            }

            echo CHtml::dropDownList
            (
                'id_estado',
                $estado_select,
                CHtml::listData($estado_list,'id_estado', 'nombre_estado'),
                array
                (
                        'ajax' => array
                        (
                                'type'=>'POST',
                                'url'=>CController::createUrl('Representante/dinamicoMunicipio'),
                                'update'=>'#Representante_id_municipio',
                                'prompt' => 'Seleccione un Departamento...'
                        )
                )
                );

                echo $form->dropDownList($model,
                'id_municipio',
                CHtml::listData($municipio_list,'id_municipio', 'nombre_municipio')
                );

                    ?>
   
    </div>
   
   
    <!-- FIN estado municipio       *******************************    -->        

    
    <!-- INICIO Nivel Educativo     *******************************    -->        
    
    <?php
        $nivel_educativo_list = NivelEducativo::model()->findAll();
        $nivel_educativo_select = '';
        $tipo_escolaridad_select = '';
        $tipo_escolaridad_list = '';
       
        if (isset($_POST['Representante'])){
                $escolaridad = Escolaridad::model()->findByPk($_POST['Representante']['id_escolaridad']);
                $escolaridad_list = Escolaridad::model()->findAll("id_tipo_escolaridad=:escolaridad",array(':escolaridad'=>$escolaridad->id_tipo_escolaridad));
                $tipo_escolaridad_select = $escolaridad->id_tipo_escolaridad;
                $tipo_escolaridad_list = TipoEscolaridad::model()->findAll("id_nivel_educativo=:nivel_educativo",array(':nivel_educativo'=>$escolaridad->idTipoEscolaridad->id_nivel_educativo));
                $nivel_educativo_select = $escolaridad->idTipoEscolaridad->id_nivel_educativo;
        }else{
                $tipo_escolaridad_list = TipoEscolaridad::model()->findAll("id_nivel_educativo=:nivel_educativo",array(':nivel_educativo'=>$nivel_educativo_list[0]->id_nivel_educativo));
                $escolaridad_list = Escolaridad::model()->findAll("id_tipo_escolaridad=:escolaridad",array(':escolaridad'=>$tipo_escolaridad_list[0]->id_tipo_escolaridad));
        }
        // CARGAR COMBO NIVEL EDUCATIVO
        echo CHtml::dropDownList
        (
            'id_nivel_educativo',
            $nivel_educativo_select,
            CHtml::listData($nivel_educativo_list,'id_nivel_educativo', 'nombre_nivel_educativo'),
            array
            (
                    'ajax' => array
                    (
                            'type'=>'POST',
                            'url'=>CController::createUrl('Representante/dinamicoTipoEscolaridad'),
                            'success'=>'function(data){
                                //alert(data);
                                $("#id_tipo_escolaridad").html(data);
                                $("#id_tipo_escolaridad").change();
                            }',
                    )
            )

        );
        //*************************************************************
        
        // CARGAR COMBO TIPO ESCOLARIDAD
        echo CHtml::dropDownList
        (
            'id_tipo_escolaridad',
            $tipo_escolaridad_select,
            CHtml::listData($tipo_escolaridad_list,'id_tipo_escolaridad', 'nombre_tipo_escolaridad'),
            array
            (
                    'ajax' => array
                    (
                            'type'=>'POST',
                            'url'=>CController::createUrl('Representante/DinamicoNombreEscolaridad'),
                            'update'=>'#Representante_id_escolaridad',
                    )
            )
        );
        //***************************************************************
        
        // CARGAR COMBO ESCOLARIDAD        
        echo $form->dropDownList($model,
            'id_escolaridad',
            CHtml::listData($escolaridad_list,'id_escolaridad', 'nombre_escolaridad')                        
        );
    ?>
    
    <!-- FIN Nivel Educativo     *******************************    -->        

    <?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Por favor coloque las letras como se muestran en la imagen superior.
		<br/>Puede colocar mayúsculas o minusculas.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>    
    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save'); ?>
	</div>    

        
<?php $this->endWidget(); ?>

</div><!-- form -->