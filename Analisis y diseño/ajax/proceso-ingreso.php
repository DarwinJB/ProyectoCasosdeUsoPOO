<?php
    include("../class/clase-persona.php");
    $p = new Persona($_GET["nombre1"],$_GET["apellido1"],$_GET["nombre2"],$_GET["apellido2"],$_GET["direccion"],$_GET["ID"],$_GET["telefono"],$_GET["edad"],$_GET["email"],$_GET["password"],$_GET["estado"],$_GET["fecha"],$_GET["No_Cuenta"]);
    echo $p->Registrar_Persona();
?>