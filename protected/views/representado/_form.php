<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'representado-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula_representante'); ?>
		<?php echo $form->textField($model,'cedula_representante'); ?>
		<?php echo $form->error($model,'cedula_representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primer_nombre_representado'); ?>
		<?php echo $form->textField($model,'primer_nombre_representado',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'primer_nombre_representado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'segundo_nombre_representado'); ?>
		<?php echo $form->textField($model,'segundo_nombre_representado',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'segundo_nombre_representado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primer_apellido_representado'); ?>
		<?php echo $form->textField($model,'primer_apellido_representado',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'primer_apellido_representado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'segundo_apellido_representado'); ?>
		<?php echo $form->textField($model,'segundo_apellido_representado',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'segundo_apellido_representado'); ?>
	</div>

	<div class="row">
            <?php echo $form->labelEx($model,'Fecha Nacimiento Representado'); ?>
                <p>año-mes-dia (ejemplo: 2000-11-15)</p>
            <?php echo CHtml::activeTextField($model,'fecha_nacimiento_representado',array("id"=>"fecha_nacimiento_representado")); ?>
            <?php echo CHtml::image("images/calendar-button.gif","calendar",
            array("id"=>"c_button_1","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'fecha_nacimiento_representado',
                    'button'=>'c_button_1',
                    'ifFormat'=>'%Y-%m-%d',
                    'language'=>'es',
                ));
                ?>
		<?php echo $form->error($model,'fecha_nacimiento_representado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Plantel'); ?>
                <?php echo $form->dropDownList($model,'id_plantel',CHtml::listData(Plantel::model()->findAll(),
                'id_plantel','nombre_plantel')); ?>   
		<?php echo $form->error($model,'id_plantel'); ?>
	</div>

        <div>

    <!-- INICIO Nivel Educativo     *******************************    -->        
    
    <?php
        $nivel_educativo_list = NivelEducativo::model()->findAll();
        $nivel_educativo_select = '';
        $tipo_escolaridad_select = '';
        $tipo_escolaridad_list = '';
       
        if (isset($_POST['Representado'])){
                $escolaridad = Escolaridad::model()->findByPk($_POST['Representado']['id_escolaridad']);
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
                            'update'=>'#Representado_id_escolaridad',
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
            
        </div>        
        
        <div>
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
        </div>
            
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save'); ?>
	</div>

        
<?php $this->endWidget(); ?>

</div><!-- form -->