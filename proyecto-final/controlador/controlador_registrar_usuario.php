<?php

if (!empty($_POST["registro"])){

if (empty($_POST["clave"]) or empty($_POST["contraseña"])){

echo '<div class="alerta"> uno de los campos esta vacio </div>';

}else 
{


$clave=$_POST["clave"];
$contraseña=$_POST["contraseña"];
$sql=$conexion->query("insert into login(clave,contraseña)values('$clave','$contraseña')");
if ($sql==1){

echo 'usuario registrado correctamente ';


}else {


}

}


}

?>