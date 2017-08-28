<?php
    
    class ProcesosEstudiantes
    {
        public function EsCedulaRepresentanteRegistrada($cedula_representante)
        {
                $resultado=  Representante::model()->find('cedula_representante=?',array($cedula_representante));
                if ($resultado!=NULL)
                {
                    return true;
                }
                return false;
        }        
    }

?>
