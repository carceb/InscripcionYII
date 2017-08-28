<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Bienvenidos a <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<ul>
    <h3>REGISTRARSE:</h3>
    <li><h4>1)  <?php echo CHtml::link('Con C&eacute;dula',array('representante/create')); ?></h4>PUEDE SER ESTUDIANTE, O PUEDE SER REPRESENTANTE DE ESTUDIANTE  SIN C&Eacute;DULA</li>
        <hr></hr>        
        <li><h4>2) <?php echo CHtml::link('Sin C&eacute;dula',array('representado/create')); ?></h4>
                DEBE SER EL ESTUDIANTE QUE ES REPRESENTADO POR LA PERSONA 
           CARGADA EN EL PASO 1</li>
        


</ul>
    <!-- removed closing div -->