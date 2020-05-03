<?php

include "db_connect.php";

$conn = OpenCon();
echo "Connected Successfully";

$select_all = "SELECT *  FROM videos ORDER by no desc ";

/*

$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

$myJSON = json_encode($myObj);

$a=array("red","green");
array_push($a,"blue","yellow");

*/


$result = $conn->query($select_all);

$arr=[];

$final_str="";

if ($result->num_rows > 0) {

	$count1=0;

	while($row = $result->fetch_assoc() ) { 

	$myObj->url =  $row["url"];
	$myObj->no  = $row["no"];
	$myObj->title =  $row["title"];
	$myObj->text =  $row["text"];

	$am= $row["url"].",".$row["no"].",".$row["title"].",".$row["text"].";";

	$final_str= $final_str.$am;

	/*$b= [

		"url" => $row["url"],

		"no" =>  $row["no"],

		"title" =>  $row["title"],

		"text" =>  $row["text"]




	]*/

	//array_push($arr,$b);

	//$count1+=1;
}

}

//$json_arr =  json_encode($arr);


echo  $final_str;

CloseCon($conn);






?>