<?php
    $destino= "amigo-by@hotmail.com";
    $Nombre= $_POST["Nombre"];
    $Casino= $_POST["Casino"];
    $Fecha= $_POST["Fecha"];
    $Correo= $_POST["Correo"];
    $Telefono= $_POST["Telefono"];
    $Cotizacion= $_POST["Cotizacion"];
    $contenido= "Tienes un nuevo cliente\n Su nombre es: ". $Nombre. "\nSu correo es: ". $Correo."\nEn el casino: ".$Casino."\nPara la fecha: ".$fecha."\n Con el numero: ". $Telefono."\nY su deseo es: ".$Cotizacion;
    mail($destino, "Tenemos un nuevo cliente",$contenido);
    header("location:gracias.html");
?>