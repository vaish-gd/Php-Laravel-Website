<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="videos.js">

		//fetchVideosFromDb();



		window.onload = function() {
 			fetchVideosFromDb();
}
	</script>
	<title>
		</title>
		<!-- link rel="stylesheet" type="text/css" href="mijares.css"-->

    <style>

    #footerId {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      height: 10%;
      background-color: #04091e;
      size: 4px;

    }
    .fbimg {
    	position: relative;
      width: 3;
      height:4;
      text-align: center;
      text-decoration: none;
      border-radius: 50%;
      left: 120px;
      top:30px;
      bottom: 0;
     }
    #headerId {
      position: fixed;
      left: 0;
      top: 0;
      width: 100%;
      size: 4px;
      background-color: #2f3742;
    }

    .centroTitle {

    	position: absolute;
      left: 0;
      top: 50px;
      width: 100%;
      height: 5%;
      size: 4px;

    }

    .youtube {

    	position: absolute;
      left: 0;
      top: 700px;
      width: 100%;
      height: 30%;
      size: 4px;
      background-color: #F5F5FB;


    }

    .proposito {

    	position: absolute;
      left: 20%;
      top: 230px;
      width: 40%;
      height: 100%;
      size: 4px;



    }

    #scrollDiv {

    	position: fixed;
      left: 0;
      top:40px;
      width: 100%;
      height: 80%;
      size: 4px;


      overflow: auto;
      transition: top 0.3s;

    }

    .footer {
    	position: fixed;
      background-color: #04091e;
      color: #878787;
    	height: 80px;
    	width:100%;
    	left: 0;
      bottom: 0;
    }

    .divFlex{

          position:absolute;
          top:750px;
          left:3px;

          display: flex;
          flex-direction: row;

        }

        .divFlex2 {
          position:absolute;
          top:750px;
          left:500px;
          display: flex;
          flex-direction: column;

        }

        .divFlex3 {
          position:absolute;
          top:750px;
          right:100px;
          display: flex;
          flex-direction: column;

        }

        .equipo_divFlex{

        	position:absolute;
          top:300px;
          left:20%;


          display: flex;
          flex-direction: row;


        }



        .videos_divFlex{

        	position:absolute;
          top:300px;
          left:10%;
          height:20px;


          display: flex;
          flex-direction: row;


        }

        .videos_divFlex2{

        	position:absolute;
          top:900px;
          left:10%;
          height:20px;


          display: flex;
          flex-direction: row;


        }


        .equipo_divFlex2 {
          position:absolute;
          top:800px;
          left:20%;
          height:100%;
          display: flex;
          flex-direction: row;
          margin-top: 0.3%;

        }

        .equipo_divFlex3 {
          position:absolute;
          top:800px;
          left:3px;
          display: flex;
          flex-direction: row;

        }

        .first {
          height: 400px;
          position: relative;
          width: 400px;
          background-color: #F5F5FB;
        }

        .second {
          height: 200px;
          width: 400px;
          position: relative;
          background-color: #F5F5FB;
          margin-bottom: 2%;
        }

        .equipo_second {
          height: 500px;
          width: 300px;
          position: relative;
          background-color: #F5F5FB;
          margin-bottom: 1%;
          margin-left: 1%;
          margin-right: 1%;
          margin-top: 1%;

        }

        .videos_second {
          height: 500px;
          width: 300px;
          position: relative;
          background-color: #F5F5FB;
          margin-bottom: 1%;
          margin-left: 1%;
          margin-right: 1%;
          margin-top: 1%;

        }

        .equipo_second_2 {
          height: 700px;
          width: 300px;
          position: relative;
          background-color: #F5F5FB;
          margin-bottom: 1%;
          margin-left: 1%;
          margin-right: 1%;
          margin-top: 1%;


        .third {
          height: 500px;
          width: 30%;
          margin-left: 10%;
          margin-right: 10%;
          background-color: blue;
        }

    </style>
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

<p style="position: absolute;top:25%;left:32%;font-family: Roboto;font-size:20px;text-decoration: bold;"> <b>UN ESPACIO PARA DEBATIR A PARTIR DEL VÍDEO</b></p>





		<div class="videos_divFlex">

			<div class="videos_second">


				<p style="font-family: Roboto;
    	position:absolute;top:65%;
font-size: 15px;
font-weight: 400;
line-height: 1.667;color:grey;padding-left:19px;padding-right:19px;" id="p1">

La Responsabilidad Social por François Vallaeys | Universidad Siglo 21 URL: https://www.youtube.com/watch?v=44E6zSpaDwE

</p>

			<h3 style="font-family: Roboto;position:absolute;left:40px;top:60%;" id="title1"> Dr. François Vallaeys </h3>

				<iframe style="position:absolute;height:60%;width:100%;"
			src="https://www.youtube.com/embed/44E6zSpaDwE" id="url1">
		</iframe>








			</div>
			<div class="videos_second">


				<p style="font-family: Roboto;
    	position:absolute;top:65%;
font-size: 15px;
font-weight: 400;
line-height: 1.667;color:grey;padding-left:19px;padding-right:19px;"  id="p2">

Panorama de la RSO en América Latina (SIRSO 2014)III SIMPOSIO DE LA RESPONSABILIDAD SOCIAL DE LAS ORGANIZACIONES URL: https://www.youtube.com/watch?v=do9dIcEIiwU

</p>

			<h3 style="font-family: Roboto;position:absolute;left:40px;top:60%;" id="title2"> Dr. François Vallaeys </h3>

				<iframe style="position:absolute;height:60%;width:100%;"
			src="https://www.youtube.com/embed/do9dIcEIiwU" id="url2">
		</iframe>


			</div>
			<div class="videos_second">

				<p style="font-family: Roboto;
    	position:absolute;top:75%;
font-size: 15px;
font-weight: 400;
line-height: 1.667;color:grey;padding-left:19px;padding-right:19px;" id="p3">

CONFERENCIA: Responsabilidad Socialersitaria como modelo universitario para América Latina URL: https://www.youtube.com/watch?v=h4juTFzNYcs

</p>

			<h3 style="font-family: Roboto;position:absolute;left:40px;top:60%;" id="title3"> UNIVERSIDAD DEL PACÍFICO​ </h3>

				<iframe style="position:absolute;height:60%;width:100%;"
			src="https://www.youtube.com/embed/h4juTFzNYcs"  id="url3">
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

Conferencia: CALIDAD EDUCATIVA Y RESPONSABILIDAD SOCIAL -Congreso Internacional de Calidad Educativa URL: https://www.youtube.com/watch?v=W7y83cZ_s7g

</p>

			<h3 style="font-family: Roboto;position:absolute;left:40px;top:60%;" id="title4"> Dr. Francois Vallaeys </h3>

				<iframe style="position:absolute;height:60%;width:100%;"
			src="https://www.youtube.com/embed/W7y83cZ_s7g" id="url4" >
		</iframe>





			 </div>



			</div>


	 <div class="footer">
        Copyright ©2020 All rights reserved | This template is made with
        ❤ by <a href="#" style="color:blue">DiazApps</a>
        <img src="links.jpeg" alt="" style="position:absolute;left:70%" />
    </div>


</body>
</html>
