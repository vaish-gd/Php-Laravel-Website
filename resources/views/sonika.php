<?php  

include "db_connect.php";

$n= $_POST['name1'];

$p= $_POST['password'];

$e = $_POST['email'];

$add =$_POST['address'];



$conn = OpenCon();
echo "Connected Successfully";


$select_all = "SELECT *  FROM Register WHERE  email = '$e' ";

$insert_all = "INSERT INTO Register (name, password, email,address) VALUES ( '$n', '$p' , '$e' ,'$add' )";






$result = $conn->query($select_all);

$isDataPresentInDb = false;


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

 			$row["email"];

 			


 			}


        
}

if(!$isDataPresentInDb){

	insertAll($conn,$insert_all);
	$subject = 'Testing PHP Mail by dr Diaz';
$message = 'Dr diaz is a helping professor';
$headers = 'Hi header';
mail($e,$subject,$message,$headers);






}

else{

	echo "user Already exists!!!";
}





} else {
   insertAll($conn,$insert_all);
   $subject = 'Testing PHP Mail by dr Diaz';
$message = 'Dr diaz is a helping professor';
$headers = 'Hi header';
mail($e,$subject,$message,$headers);
    echo "0 results";
}






CloseCon($conn);
 






//echo $_POST["email"];

?>