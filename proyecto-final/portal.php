

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=egde">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Document</title>
<div class="college"> 
<div class="form-college"  >
<img src="img/logo.png" alt="avatar" class="avatar">
</head>

<body>

<style>
	
img.avatar{

width: 150px;
border: radius 150px;


}
.form-college{

margin: 0 0 0 12px;
text-align: center;
position: relative;

}
.college{

position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
padding: 80px 40px;
width: 400px;
height: 600px;
background: rgba(0, 0, 0, 0.5);
box-sizing: border-box;
box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.9);
}

body {

padding: 0;
margin: 0;
background-image:url("img/fondo1.jpg");
background-repeat: no-repeat;
background-size: auto;

}
.login-formr-Industries{

display: flex;
width: 100%;
margin-bottom: 15px;

}
.icon{

padding: 15px;
background-color: dodgerblue;
color: white;
min-width: 50px;
text-align: center;
}

.markship-login-form{

padding: 15px;
width: 100%;
outline: none;

}
.markship-login-form:focus {

border: 1px solid darkred;

}
.btn{

background: black;
border: none;
color: white;
cursor:pointer;
padding: 15px 20px;
width: 100%;
opacity: 0.9;
}
.btn:hover{

opacity: 1;

}
h2 {

color: white;

}

</style>




<h2>acceder a mi aplicacion </h2> 
<form  action ="validad.php"  method="POST"  style="max-width: 500px;margin:auto">
<div class="login-formr-Industries">
	<i class="fa fa-user icon"></i>
<input class="markship-login-form" type="text" placeholder="clave" name ="clave" >
	
</div>


	<div class="login-formr-Industries">
	<i class="fa fa-key icon"></i>
	<input class="markship-login-form" type="password" placeholder="contraseña" name ="contraseña" >

</div>	

<button class="btn" type ="submit" >iniciar sesion </button>
</div>

</form>


</body>
</html>