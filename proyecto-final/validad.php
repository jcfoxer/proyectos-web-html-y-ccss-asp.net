<?php

$clave =$_POST['clave'];
$contraseña=$_POST['contraseña'];
session_start();

$_SESSION['clave']=$clave;

$conn=mysqli_connect("localhost","root","","bd");
$consulta ="SELECT * FROM login WHERE clave ='$clave' and contraseña ='$contraseña'";
$resultado =mysqli_query($conn,$consulta);
$filas =mysqli_num_rows($resultado);

if ($filas)
{

header ("location:home.php");

}

else 

{

?> 
<?php 
include ("portal.php");
?>
<h2 class="bad">ERROR EN LA AUTENTIFICACION </h2>

<?php

}
mysqli_free_result($resultado);
mysqli_close ($conn);
?>