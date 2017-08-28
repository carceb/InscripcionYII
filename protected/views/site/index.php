<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Bienvenidos a <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<ul>
    <li><h1>REGISTRARSE:</h1></li>
        <hr></hr>
        <br></br>
        <li>1) CON CEDULA (PUEDE SER ESTUDIANTE, O PUEDE SER REPRESENTANTE 
           DE ESTUDIANTE  SIN CEDULA)</li>
        <li><?php echo CHtml::link('Registro de Estudiante',array('representante/create')); ?></li>
        <br></br>
        <hr></hr>        
        <li>2) SIN CEDULA (DEBE SER EL ESTUDIANTE QUE ES REPRESENTADO POR LA PERSONA 
           CARGADA EN EL PASO 1)</li>


</ul>
