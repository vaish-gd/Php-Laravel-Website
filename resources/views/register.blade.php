<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script type="text/javascript" src="{{url('1.js')}}">

    var p=document.getElementById("email");








  </script>





  <link rel="stylesheet" type="text/css" href="{{url('mijares.css')}}">
	<style>

input[type=text], select {
  width: 40%;
  padding: 12px 20px;
  margin: 15px 5px;
  display: inline;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;

}





</style>
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

    <a href="Register.html" style="left:1187px;top:10px;position:absolute;width:80%;text-decoration:none;color:black;">Registro</a>

	</div>
  <img src="icon.jpg" width="100" height="80" style="position:absolute; top:150px; left:600px" />
  <p style="position: absolute;top:200px;font-family: Roboto;font-size: 25px;font-weight: 300;line-height: 1.667;left:600px">
    <b style="font-family: Roboto;">Registro </b> </p>



    <form style="position: absolute; top:300px; left:200px" action = "regController"  method="post">
      <input type='text' style=”display:inline” placeholder='Nombre'

      name ="name1" id="name1"

      >


      <input type='text' style=”display:inline” placeholder='Correo'
      name ="email" id="email"
       >



      <br />
      <input type='text' style=”display:inline” placeholder='Contrasena'
      name ="password" id="password"

      required>
      <input type='text' style=”display:inline” placeholder='Repeter Contrasena'

        name ="confirmPassword" id="confirmPassword"

      required> <br />


      @if (session('alert'))
       {{ session('alert') }}
       @endif

      {{$errors}}



      <input type='text' placeholder='Direccion' style="width:60%" name ="address" id="address" required>
       {{@csrf_field()}}
      <input type="submit" value="Guardar" style="color:white;background-color:blue;" >
    </form>





    <div class="footer">
        Copyright ©2020 All rights reserved | This template is made with
        ❤ by <a href="#" style="color:blue">DiazApps</a>
        <img src="links.jpeg" alt="" style="position:absolute;left:70%" />
    </div>
  </body>
  </html>
