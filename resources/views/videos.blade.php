<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--script type="text/javascript" src="{{url('videos.js')}}" -->



	<title>
		</title>
		<link rel="stylesheet" type="text/css" href="{{url('mijares.css')}}" >


</head>
<body >

	<div id="headerId">
		<img src="{{url('icon.jpg')}}" width="150" height="40">
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

 @foreach($videos as $video)
<p style="position: absolute;top:25%;left:32%;font-family: Roboto;font-size:20px;text-decoration: bold;"> <b>UN ESPACIO PARA DEBATIR A PARTIR DEL VÍDEO</b>


</p>





		<div class="videos_divFlex">

			<div class="videos_second">


				<p style="font-family: Roboto;
    	position:absolute;top:65%;
font-size: 15px;
font-weight: 400;
line-height: 1.667;color:grey;padding-left:19px;padding-right:19px;" id="p1">

{{$videos[0] ->  text}}

</p>

			<h3 style="font-family: Roboto;position:absolute;left:40px;top:60%;" id="title1"> {{$videos[0] ->  title}} </h3>

				<iframe style="position:absolute;height:60%;width:100%;"
			src="{{$videos[0]->url}}" id="url1">
		</iframe>








			</div>
			<div class="videos_second">


				<p style="font-family: Roboto;
    	position:absolute;top:65%;
font-size: 15px;
font-weight: 400;
line-height: 1.667;color:grey;padding-left:19px;padding-right:19px;"  id="p2">

{{$videos[1]->text}}
</p>

			<h3 style="font-family: Roboto;position:absolute;left:40px;top:60%;" id="title2"> {{$videos[1]-> title}} </h3>

				<iframe style="position:absolute;height:60%;width:100%;"
			src="{{$videos[1]->url}}" id="url2">
		</iframe>


			</div>
			<div class="videos_second">

				<p style="font-family: Roboto;
    	position:absolute;top:75%;
font-size: 15px;
font-weight: 400;
line-height: 1.667;color:grey;padding-left:19px;padding-right:19px;" id="p3">

{{$videos[2]->text}}

</p>

			<h3 style="font-family: Roboto;position:absolute;left:40px;top:60%;" id="title3"> {{$videos[1]->title}} </h3>

				<iframe style="position:absolute;height:60%;width:100%;"
			src="{{$videos[2]->url}}"  id="url3">
		</iframe>





			</div>


			</div>

			<div class="videos_divFlex2">

			<div class="videos_second">


				<p style="font-family: Roboto;
    	position:absolute;top:65%;
font-size: 15px;
font-weight: 400;
line-height: 1.667;color:grey;padding-left:19px;padding-right:19px;" id="p4">

{{$videos[2]->text}}
</p>

			<h3 style="font-family: Roboto;position:absolute;left:40px;top:60%;" id="title4"> {{$videos[2]-> title}} </h3>

				<iframe style="position:absolute;height:60%;width:100%;"
			src="https://www.youtube.com/embed/W7y83cZ_s7g" id="url4" >
		</iframe>





			 </div>



			</div>

@endforeach

	 <div class="footer">
        Copyright ©2020 All rights reserved | This template is made with
        ❤ by <a href="#" style="color:blue">DiazApps</a>
        <img src="links.jpeg" alt="" style="position:absolute;left:70%" />
    </div>


</body>
</html>
