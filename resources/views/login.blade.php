<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">


		<script type="text/javascript" src="{{url('login.js')}}">










  </script>







	<title>
		</title>
		<link rel="stylesheet" type="text/css" href="{{url('mijares.css')}}">
</head>
<body>
	<div id="headerId">
		<img src="icon.jpg" width="150" height="40">
		<a href="inicio.html" style="left:200px;top:10px;position:absolute;width:8;height:10;color:black;text-decoration: none;">Inicio</a>

		<a href="Semblanza.html" style="left:280px;top:10px;position:absolute;width:80%;text-decoration:none;color:black;">Semblanza</a>

		<a href="Centro.html" style="left:387px;top:10px;position:absolute;width:80%;text-decoration:none;color:black;">Centro Augusto Mijares</a>

		<a href="Proyectos.html" style="left:587px;top:10px;position:absolute;width:80%;text-decoration:none;color:black;"> Proyectos</a>

		<a href="Eventos.html" style="left:687px;top:10px;position:absolute;width:80%;text-decoration:none;color:blue;">Events</a>

		<a href="Videos.html" style="left:787px;top:10px;position:absolute;width:80%;text-decoration:none;color:black;">Videos</a>

		<a href="Equipo.html" style="left:887px;top:10px;position:absolute;width:80%;text-decoration:none;color:black;">Equipo</a>

		<a href="Incio_De_Session.html" style="left:987px;top:10px;position:absolute;width:80%;text-decoration:none;color:black;">Inicio De Session
		</a>

		<a href="http://vxg8753.uta.cloud/" style="left:1130px;top:10px;position:absolute;width:80%;text-decoration:none;color:black;">Blog</a>

		<a href="/register" style="left:1187px;top:10px;position:absolute;width:80%;text-decoration:none;color:black;">Registro</a>
	</div>

	<div id="scrollDiv">

		<img src="icon.jpg" style="position:absolute;left:45%;top:5%" width="200" height="100" />

<p style="position: absolute;top:25%;left:38%;font-family: Roboto;font-size:30px;text-decoration: bold;"> <b>CENTRO AUGUSTO MIJARES</b></p>

<p style="position: absolute;top:35%;left:48%;font-family: Roboto;font-size:25px;text-decoration: bold;"> <b>Iniciar Sesion</b></p>


<form  method="post" action="loginController">
<input type="text" placeholder="Nombre de Usuario o Correo"
style="position:absolute;top:48%;left:32%;width:14%;"

id="email" name = "email"
required>

<input type="text" placeholder="Contrasena"
style="position:absolute;top:48%;left:52%;width:14%;"

id="password" name = "password"
required>


<div style="position:absolute;">
@if (session('alert'))
 {{ session('alert') }}
 @endif

 {{$errors}}
</div>






{{@csrf_field()}}
<input type="submit" style="background-color: #6059f6;color: #fff;position: absolute;top:58%;left:48%;" >






</form>

</div>

<div class="footer">
        Copyright ©2020 All rights reserved | This template is made with
        ❤ by <a href="#" style="color:blue">DiazApps</a>
        <img src="links.jpeg" alt="" style="position:absolute;left:70%" />
    </div>


</body>
</html>
