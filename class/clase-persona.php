<?php
    class Persona{
        protected $nombre1;
        protected $nombre2;
        protected $apellido1;
        protected $apellido2;
        protected $telefono;
        protected $ID
        protected $edad;
        protected $correo;
        protected $No_Cuenta;

        public function __construct($nombre1=null,$nombre2=null,$apellido1=null,$apellido2=null,$direccion=null,$ID=null,$telefono=null,$edad=null,$correo=null,$No_Cuenta=null){
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->direccion=$direccion;
            $this->ID=$ID;
            $this->telefono=$telefono;
            $this->edad=$edad;
            $this->correo=$correo;
            $this->No_Cuennta;
            
        

            
        }
        public function getNombre1(){
            return $this->nombre;
        }
        public function setNombre1($nombre1){
            $this->nombre1 = $nombre1;
        }
          public function getNombre2(){
            return $this->nombre2;
        }
        public function setNombre2($nombre2){
            $this->nombre2 = $nombre2;
        }
        public function getApellido1(){
            return $this->apellido1;
        }
        public function setApellido1($apellido1){
            $this->apellido1 = $apellido1;
        }
         public function getApellido2(){
            return $this->apellido2;
        }
        public function setApellido2($apellido2){
            $this->apellido2 = $apellido2;
        }
        public function getDireccion(){
            return $this->direccion;
        }
        public function setDireccion($direccion){
            $this->direccion = $direccion;
        }
        public function getTelefono(){
            return $this->telefono;
        }
        public function setTelefono($telefono){
            $this->telefono = $telefono;
        }
        public function getEdad(){
            return $this->edad;
        }
        public function setEdad($edad){
            $this->edad = $edad;
        }
        public function getCorreo(){
            return $this->correo;
        }
        public function setCorreo($correo){
            $this->correo = $correo;
        }
        public function getObtenerkey(){
            return $this->No_Cuenta;
        }
        public function setObtenerkey($No_Cuenta){
            $this->No_Cuenta=$No_Cuenta;
        }   
        public function getID(){
            return $this->ID;
        }
        public function setID($ID){
            $this->No_Cuenta=$ID;
        }  
       
        public function Registrar_Persona(){
            $archivo = fopen("../data/registro_persona.json","a+");
            $arreglo = array();
            $arreglo["nombre1"]=$this->nombre1;
            $arreglo["nombre2"]=$this->nombre2;
            $arreglo["apellido1"]=$this->apellido1;
            $arreglo["apellido2"]=$this->apellido2;
            $arreglo["direccion"]=$this->direccion;
            $arreglo["ID"]=$this->ID;
            $arreglo["telefono"]=$this->telefono;
            $arreglo["edad"]=$this->edad;
            $arreglo["correo"]=$this->correo;

            fwrite($archivo,json_encode($arreglo) ."\n");
            fclose($archivo);
            return json_encode($arreglo);
        }
        public function __toString(){
            return "$this->nombre1,$this->nombre2,$this->apellido1,$this->apellido2,$this->direccion,$this->ID,$this->telefono,$this->edad,$this->correo,$this->No_Cuenta,$this->centro";
        }
    }
?>