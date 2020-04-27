<?php

function OpenCon()
 {
 //$dbhost = "localhost";
 	$dbhost = "vxg8753.uta.cloud";
 //$dbuser = "root";

 	$dbuser = "vxg8753_root";
 
 //$db = "working1";

$db_name = "vxg8753_working1";

$db_pass="sheetal!55";

 $conn = new mysqli($dbhost, $dbuser, $db_pass,$db_name) or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }

 function insertAll($conn,$insert_all){

 	if ($conn->query($insert_all) === TRUE) {
    echo "New record created successfully";

} else {
    echo "Errorrrrrrrrrrr: " . $insert_all . "<br>" . $conn->error;
}
 }
   
?>