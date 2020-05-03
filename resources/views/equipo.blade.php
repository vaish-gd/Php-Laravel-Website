<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="{{url('equipo.js')}}">

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

		<a href="Register.html" style="left:1187px;top:10px;position:absolute;width:80%;text-decoration:none;color:black;">Registro</a>
	</div>

	<div id="scrollDiv">

		<img src="icon.jpg" style="position:absolute;left:45%;top:5%" width="200" height="100" />

<p style="position: absolute;top:25%;left:42%;font-family: Roboto;font-size:20px;text-decoration: bold;"> <b>SOMOS UN EQUIPO INTERDISCIPLINARIO</b></p>




		<div class="equipo_divFlex">

			<div class="equipo_second">

				<img src="{{url('admin-2.php?id=21')}}" style="position:absolute;height:40%;width:60%;left:20%;top:10%">

				<h3 style="font-family: Roboto;position:absolute;left:40px;top:50%;" id="h21"> {{$professors[0]-> name }}</h3>
    	<p style="font-family: Roboto;
    	position:absolute;
font-size: 15px;
font-weight: 400;
line-height: 1.667;color:grey;top:60%;padding-left:19px;padding-right:19px;" id="p21">
    		Lic. en Administración, Magister en Turismo, Mención Mercadeo Turístico; Experiencia como docente universitario y promotor de emprendedores. <br />
Teléf.: 0416-5971407<br />
E-mail: arcaro0460@hotmail.com<br />
    	 </p>


			</div>

			<div class="equipo_second">

				<img src="{{url('admin-2.php?id=22')}}" style="position:absolute;height:40%;width:60%;left:20%;top:10%">

				<h3 style="font-family: Roboto;position:absolute;left:40px;top:50%;" id="h22"> {{$professors[1]-> name }} </h3>
    	<p style="font-family: Roboto;
    	position:absolute;
font-size: 15px;
font-weight: 400;
line-height: 1.667;color:grey;top:60%;padding-left:19px;padding-right:19px;" id="p22">
    		Psicólogo amplia experiencia en desarrollo organizacional, gestión y desarrollo de talento humano en instituciones públicas y empresas privadas. <br />
Teléf.: 0416-8969824<br />
E-mail: juditha.alvarado@gmail.com<br />
    	 </p>





			 </div>

<div class="equipo_second">

	<img src="{{url('admin-2.php?id=23')}}" style="position:absolute;height:40%;width:60%;left:20%;top:10%">

	<h3 style="font-family: Roboto;position:absolute;left:40px;top:50%;"id="h23"> {{$professors[2]-> name }} </h3>
    	<p style="font-family: Roboto;
    	position:absolute;
font-size: 15px;
font-weight: 400;
line-height: 1.667;color:grey;top:60%;padding-left:19px;padding-right:19px;" id="p23">
    		Maestra, Actriz, Directora, Autora de Textos Teatrales, Maestra de Actuación, Teatrista. <br />
Teléf.: 0416-1949369<br />
E-mail: juditha.alvarado@gmail.com<br />
    	 </p>


</div>


		</div>

		<div class="equipo_divFlex2">

			<div class="equipo_second">
				<img src="{{url('admin-2.php?id=24')}}" style="position:absolute;height:40%;width:60%;left:20%;top:10%">
				<h3 style="font-family: Roboto;position:absolute;left:40px;top:50%;" id="h24"> {{$professors[3]-> name }} </h3>
    	<p style="font-family: Roboto;
    	position:absolute;
font-size: 15px;
font-weight: 400;
line-height: 1.667;color:grey;top:60%;padding-left:19px;padding-right:19px;" id="p24">

      {{$professors[3]-> text }}
    	 </p>

			</div>
			<div class="equipo_second_2">

				<img src="{{url('admin-2.php?id=25')}}" style="position:absolute;height:40%;width:60%;left:20%;top:10%">
				<h3 style="font-family: Roboto;position:absolute;left:40px;top:50%;" id="h25"> {{$professors[4]-> name }} </h3>

    	<p style="font-family: Roboto;
    	position:absolute;
font-size: 15px;
font-weight: 400;
line-height: 1.667;color:grey;top:60%;padding-left:19px;padding-right:19px;" id="p25">

    {{$professors[4]-> text }}
    	 </p>
			</div>

<div class="equipo_second">
	<img src="{{url('admin-2.php?id=26')}}" style="position:absolute;height:40%;width:60%;left:20%;top:10%">
	<h3 style="font-family: Roboto;position:absolute;left:40px;top:50%;"
	id="h26"> {{$professors[5]-> name }} </h3>
    	<p style="font-family: Roboto;
    	position:absolute;
font-size: 15px;
font-weight: 400;
line-height: 1.667;color:grey;top:60%;padding-left:19px;padding-right:19px;" id="p26">
    		{{$professors[5]-> text }}
    	 </p>

</div>


		</div>

		<!--div class="equipo_divFlex3">

			<div class="equipo_second"> </div>
			<div class="equipo_second"> </div>

<div class="equipo_second"> </div >


		</div-->





	</div>


	 <div class="footer">
        Copyright ©2020 All rights reserved | This template is made with
        ❤ by <a href="#" style="color:blue">DiazApps</a>
        <img src="links.jpeg" alt="" style="position:absolute;left:70%" />
    </div>


</body>
</html>
