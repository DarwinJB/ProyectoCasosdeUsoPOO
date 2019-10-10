<?php
include("clase-persona.php");

class instructor extends Persona{
    public function __construct($nombre1=null,$nombre2=null,$apellido1=null,$apellido2=null,$direccion=null,$ID=null,$telefono=null,$edad=null,$correo=null,$No_Cuenta=null){
        parent::__construct($nombre1,$nombre2,$apellido1,$apellido2,$direccion,$ID,$telefono,$edad,$correo,$No_Cuenta);
    }

    public function Habilitar_Instructor(){
        $archivo = fopen("../data/registro_docente.json","a+");
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