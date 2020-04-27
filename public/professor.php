<?php

$deleteProf=$_POST["deleteProf"];
$fetchProf=$_POST["deleteProf"];

include "db_connect.php";

$conn = OpenCon();



	$name=$_POST["name"];

	$sql = "DELETE FROM professor2 where name = '{$name}'";

	if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}






?>