<?php
include("clase-persona.php");
class Usuario extends Persona{
    public function __construct($nombre=null,$apellido=null,$direccion=null,$ID=null,$telefono=null,$edad=null,$correo=null,$No_Cuenta=null,){
        parent::$ID,$correo;
    }

    public function Habilitar_Usuario(){
        $archivo = fopen("../data/registro_usuario.json","a+");
        $arreglo = array();
        $arreglo["nombre1"]=$this->nombre1;
        $arreglo["nombre2"]=$this->nombre2;
        $arreglo["apellido1"]=$this->apellido1;
        $arreglo["apellido2"]=$this->apellido2;
        $arreglo["No_Cuenta"]=$this->No_Cuenta;
        
      
        fwrite($archivo, json_encode($arreglo) . "\n");
        fclose($archivo);
        return json_encode($arreglo);
    }
}

?>