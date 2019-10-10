<?php
    include("../class/clase-docente.php");
    $d = new instructor($_GET["nombre1"],$_GET["nombre2"],$_GET["apellido1"],$_GET["apellido2"],$_GET["direccion"],$_GET["ID"],$_GET["telefono"],$_GET["edad"],$_GET["email"],$_GET["No_Cuenta"]);
    echo $d->Habilitar_Instructor();
?>