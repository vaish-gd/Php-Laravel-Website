<?php

include "db_connect.php";

$conn = OpenCon();


//header('Content-type: image/jpeg');
$asdf="cv";


$id= $_GET["id"];

$sql = "SELECT * FROM professor2 where id = {$id}";


//$result = $conn->query($sql);

    //$blobObj = new BlobDemo();

   

//$data=$result->mysql_fetch_array(result)();

$result = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($conn));


		
		$row = mysqli_fetch_array($result);

		//$row = mysqli_fetch_assoc($result);
		header("Content-type: " . $row["type"]);
      
      echo   $row['image'] ;


	//header('Content-type: image/png');
    
   









/*if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {

header('content-type: image/jpeg');

 $a=$row['image'];
echo $a;


}

}*/



?>





























