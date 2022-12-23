<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=egde">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>bienvenidos a mi aplicacion </title>
</head>
<body>

<header>
		
	<div class="ancho">
		<div class="logo">
		<p><a>Jcfoxer & DevOps</a></p>
		</div>
		<nav id="menú">
		<ul>
		<li><a href="Inicio.php">Inicio</a></li>
		<li><a href="Servicios.php">Servicios</a></li>
		<li><a href="contacto.php">Contactenos</a></li>
		<li><a href="login.php">Iniciar-Session</a></li>
        <li><a href="registrousuario.php">Registrarse</a></li>				
		</ul>
	    </nav>
	   	    
    </header>
    
    <div class="content-all">
        <div class="content-carrousel">
            <figure><img src="img/img1.jpg"></figure>
            <figure><img src="img/img2.jpg"></figure>
            <figure><img src="img/img3.jpg"></figure>
            <figure><img src="img/img4.jpg"></figure>
            <figure><img src="img/img5.jpg"></figure>
            <figure><img src="img/img6.jpg"></figure>
            <figure><img src="img/img7.jpg"></figure>
            <figure><img src="img/img8.jpg"></figure>
            <figure><img src="img/img9.jpg"></figure>
            <figure><img src="img/img10.jpg"></figure>

  <div class="container"> 
  <div class="card">    
    <div class="face front hit"></div>
    <div class="face back"></div>  
  </div>
        </div>
       </div>
  </div>

 <div id="wrapper">
        <header>
           
           
        <footer>
            <div class="container">diseñado por jcfoxer </div>
        </footer>
    </div>





<style>



*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/*este body es de la imagen de atras  */
body{
    background-image:url(img/fondo3.jpg);
   
   background-size: auto; 
   background-repeat: no-repeat;
   padding: 0;
   margin: 0;
}

h2{
    text-align: center;
    font-size: 40px;
    font-family: arial;
    margin-top: 80px;
    color: aqua;
    text-shadow: 0px 0px 6px black;
}

.content-all{
    width: 210px;
    margin: auto;
    perspective: 870px;
    position: relative;
    margin-top: 50px;
}

.content-carrousel{
    width: 120%;
    position: absolute;
    animation: rotar 60s infinite linear;
    transform-style:preserve-3d;
}

.content-carrousel:hover{
    animation-play-state: paused;
    cursor: pointer;
}


.content-carrousel figure{
    width: 100%;
    height: 140px;
    overflow: hidden;
    position: absolute;
    box-shadow: 0px 0px 20px 0px black;
    transition: all 300ms;
    
}

.content-carrousel figure:hover{
    box-shadow: 0px 0px 0px 0px black;
    transition: all 300ms;
}

.content-carrousel figure:nth-child(1){transform: rotateY(0deg) translateZ(580px);}
.content-carrousel figure:nth-child(2){transform: rotateY(40deg) translateZ(580px);}
.content-carrousel figure:nth-child(3){transform: rotateY(80deg) translateZ(580px);}
.content-carrousel figure:nth-child(4){transform: rotateY(120deg) translateZ(580px);}
.content-carrousel figure:nth-child(5){transform: rotateY(160deg) translateZ(580px);}
.content-carrousel figure:nth-child(6){transform: rotateY(200deg) translateZ(580px);}
.content-carrousel figure:nth-child(7){transform: rotateY(240deg) translateZ(580px);}
.content-carrousel figure:nth-child(8){transform: rotateY(280deg) translateZ(580px);}
.content-carrousel figure:nth-child(9){transform: rotateY(320deg) translateZ(580px);}
.content-carrousel figure:nth-child(10){transform: rotateY(360deg) translateZ(580px);}

.content-carrousel img{
    width: 100%;
    transition: all 300ms;
}

.content-carrousel img:hover{
    transform: scale(1.2);
    transition: all 300ms;
}


@keyframes rotar{
    from{
        transform: rotateY(0deg);
    }to{
        transform: rotateY(360deg);
    }
}





*{
	margin: 0;
	padding: 0;
}
header{
	width: 100%;
	background:#RRGGBBAA;
	height: 70px;
}

.ancho{
	width: 100%;
	height: 70px;
	margin: auto;
}
.logo{
	
	width: 30%;
	height: 70px;
	float: left;
	padding: 10px;
	box-sizing: border-box;
}

.logo p a {
color: #fff;
font-size: 40px;
text-decoration: none;
font-weight: bold;
font-family: rale;
}
nav{
	width: 70%;
	height: 70px;
	/*background:olive;*/
	float: left;
	text-align: right;
	padding-top:24px;
	box-sizing: border-box;
}
nav ul li{
	display: inline;
}
nav ul li a{
	color:#fff;
	font-size:13px;
	text-decoration: none;
	text-transform:uppercase;
	padding: 20px;
	font-weight: bold;
	letter-spacing: 1px;
	font-family: rale;
}
nav ul li a:hover{
	color:#444;
}
@font-face{
	font-family: rale;
	scr:url(fuentes\Raleway-Regular.ttf);
}



  .contenido{
	width: 100%;
	height: 100%;
	top: 0;
	right:0;
	position: absolute;
	text-align: center;
	display: flex;
	justify-content: center;
	align-items: center;
}
  .contenido h1{
	font-size: 160px;
	color:#fff;
	font-weight: 600;
	transition:0.5s;
	display: inline-block;
	text-decoration: none;
	border: 2px solid #fff;
	padding: 14px 70px;
	border-radius: 50px;
	margin-top: 20px;
}
  .contenido h1:hover{
  -webkit-text-stroke:2px #fff;
  color:transparent;
}
.container {-webkit-perspective: 1800px;  width: 245px; height: 342px; margin: 30px auto;}
.card {
  -webkit-transform-style: preserve-3d;
  width: 245px; height: 342px;
  position: absolute;
  -webkit-transform: rotateY(180deg);
  -webkit-animation: spin 10s linear infinite;
  background:#RRGGBBAA;
  border-radius: 100px;
  
}



.face {
  width: 245px; height: 342px;
  position: absolute;
}
.front {width: 245px; height: 342px; box-shadow: 0px 0px 100px 10px white; }
.back {
  width: 245px; height: 342px;
 background:url("logo2.gif");
  -webkit-transform: translateZ(-3px) rotateY(180deg);
  background-size: cover;
  border-radius: 11px;

}




@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotateY(0deg)
  }
  
  100% {
    -webkit-transform: rotateY(360deg);
  }
}





 


footer {
    color: white;
    background-color: #1A1A1A;
    width: 100%;
    height: 81px;
    position: absolute;
    bottom: 0;
    left: 0;
}

.container {
    padding:12px;
}




</style>


         



</body>
</html>