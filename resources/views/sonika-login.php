<?php  

include "db_connect.php";



$p= $_POST['password'];

$e = $_POST['email'];





$conn = OpenCon();
echo "Connected Successfully";


$select_all = "SELECT *  FROM Register WHERE  email = '$e' ";








$result = $conn->query($select_all);

$isDataPresentInDb = false;

$passwordMatches = false;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

 			$email_from_db=$row["email"];
 			$password_from_db=$row["password"];

 			if($email_from_db===$_POST["email"] && $p===$password_from_db){

 				$isDataPresentInDb = true;

 				$passwordMatches = true;


 			}


        
}
if(!$passwordMatches){

	echo "incorrect password";


}

else

if(!$isDataPresentInDb){

	

echo "user doesnt  exists!!!";




}

else{


	/*

	$a = 'How are you?';

if (strpos($a, 'are') !== false) {
    echo 'true';
}



	*/

	if(  strpos($e,'admin') !==false ){

		echo "user is admin";
	}

	else {

		echo  "user is student";
	}

	
}





} else {
   
   echo "user doesnt  exists!!!";
}






CloseCon($conn);
 


