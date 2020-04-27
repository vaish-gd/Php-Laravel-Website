<?php


include "db_connect.php";

$conn = OpenCon();



	$name=$_POST["name"];

	$sql = "SELECT *  FROM professor2 ";

	$result = $conn->query($sql);

$arr=[];

$final_str="";

if ($result->num_rows > 0) {

	$count1=0;

	while($row = $result->fetch_assoc() ) { 

	

	$am= $row["name"].";";

	$final_str= $final_str.$am;

}

}

echo $final_str;






?>