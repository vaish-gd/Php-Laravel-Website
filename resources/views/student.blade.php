<!DOCTYPE html>
<html>
<head>
	<title>

	</title>
	<script type="text/javascript">

		//var table=document.getElementById("firsttable");

		function projects(){

			var table="";
			 table=document.getElementById("insertfirsttable");

			var th1 = document.getElementById("th1");
			var th2 = document.getElementById("th2");
			var th3 = document.getElementById("th3");
			th1.innerHTML="upcoming pending  projectname";
			th2.innerHTML="subject";
			th3.innerHTML="deadline";
			var row = table.insertRow(0);

  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  cell1.innerHTML = "Performance enhancing in MapReduce for image";
  cell2.innerHTML = "Big data";
cell3.innerHTML = "4th march 2020";



		}

		function event1(){
			var table="";
			 table=document.getElementById("insertfirsttable");

			var th1 = document.getElementById("th1");
			var th2 = document.getElementById("th2");
			var th3 = document.getElementById("th3");
			th1.innerHTML="Upcoming event name";
			th2.innerHTML="Upcoming event date";
			th3.innerHTML="Place of Event";

	var row = table.insertRow(0);

  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  cell1.innerHTML = "Android workshop";
  cell2.innerHTML = "2nd march 2020";
cell3.innerHTML = "Mr. Sonogram's hall";


		}

		function reset(){
			var table="";
			 table=document.getElementById("insertfirsttable");

			 table.deleteRow(0);
			 for(var i = table.rows.length; i > 0;i--)
{
table.deleteRow(i -1);
}

		}

		function contacts(){


			var table="";
			 table=document.getElementById("insertfirsttable");





			var th1 = document.getElementById("th1");
			var th2 = document.getElementById("th2");
			var th3 = document.getElementById("th3");
			th1.innerHTML="id";
			th2.innerHTML="user name";
			th3.innerHTML="phone no";


			var row = table.insertRow(0);

  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  cell1.innerHTML = "1";
  cell2.innerHTML = "Sam";
cell3.innerHTML = "919 453 0123";


var row = table.insertRow(1);

  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  cell1.innerHTML = "2";
  cell2.innerHTML = "Bob";
cell3.innerHTML = "919 453 0124";

var row = table.insertRow(2);

  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  cell1.innerHTML = "3";
  cell2.innerHTML = "Gring";
cell3.innerHTML = "919 453 0134";





		}


	</script>
</head>
<body>

	<h1> Welcome User {{session()->get('data')}} </h1>

	<div id="d1"> </div>
	<button onclick="event1()" > Events </button>
	<button onclick="contacts()"> Contacts </button>
	<button onclick="projects()"> Projects </button>
	<button onclick="reset()"> reset </button>
	<a href="inicio.html"> Click here to go to home page of website </a>
	<table id="firsttable" border="1" style="position:absolute;top:500px;">
      <thead>
        <th id="th1"></th>
        <th id="th2"></th>
        <th id="th3"> </th>
       </thead>
      <tbody id="insertfirsttable">
      </tbody>
    </table>


</body>
</html>>
