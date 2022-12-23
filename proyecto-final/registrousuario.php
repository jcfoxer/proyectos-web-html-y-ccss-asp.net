<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>registrar usuario </title>
</head>
<body>
<style type="text/css">
  
.{

background-color:black;



}




</style>
<div class ="container">
	<form action="" method="POST" class="formulario"  >
       <h2 class="titulo" ><center>REGISTRAR</center> </h2>
       <?php

       include  ("modelo/conexion_bd.php");
       include  ("controlador/controlador_registrar_usuario.php");
       ?>

       <div class ="padre"> 
         <div class="usuario">
           <label for=""  >usuario</label>
           <input type="text" name="clave">
          </div>
          <div class="contraseña"  >
          	<label for="" >contraseña</label>
            <input type="password" name="contraseña">



          </div>
      <div  class="cuenta">
	  <input class="boton" type ="submit" value="registrar " name="registro" >
      <a href="portal.php >salir </a>


    


       </div>

    </form>



</body>
</html>