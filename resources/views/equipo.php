<?php  

include "db_connect.php";





$conn = OpenCon();
//echo "Connected Successfully";

$id = $_POST["id"];

$select_all = "SELECT *  FROM  professor2 where id = {$id} ";


//echo "ID received is ".$id;





$result = $conn->query($select_all);

$isDataPresentInDb = false;

$final_str="";


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

 			$am= $row["name"]."^^%".$row["text"].";;;";

			$final_str= $final_str.$am;

 			


 			}
    }




echo  $final_str;




CloseCon($conn);
 






//echo $_POST["email"];

?>