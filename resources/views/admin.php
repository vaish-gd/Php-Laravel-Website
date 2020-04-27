<?php

include "db_connect.php";
$conn = OpenCon();
if (count($_FILES) > 0) {
    if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
       
        $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
        $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);

        $name=$_POST["name"];

        $text = $_POST["text1"];
        
        $sql = "INSERT INTO  professor2 (image,text,type,name)
	VALUES('{$imgData}','{$text}','{$imageProperties['mime']}','{$name}')";
        $current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
        
    }
}
?>


<!DOCTYPE html>
<html>
<head>
	<script  type="text/javascript">

		function deleteProf(){


	var xhr = new XMLHttpRequest();

        var form = new FormData();

      

      form.append("deleteProf", true);

      form.append("fetchProf", true);

      form.append("name", document.getElementById("delname").value);

        xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       // Typical action to be performed when the document is ready:

       var pq = xhr.responseText;
       console.log(pq);

       if(pq.includes("exists")){
        alert("user already exists");
       }

     // document.getElementById("headerId").innerHTML= pq;
}
};
xhr.open("POST", "professor.php", true);
xhr.send(form);

}

function fetchProf(){


	var xhr = new XMLHttpRequest();

        var form = new FormData();

      

      form.append("deleteProf", true);

      form.append("fetchProf", true);

      form.append("name", document.getElementById("delname").value);

        xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       // Typical action to be performed when the document is ready:

       var pq = xhr.responseText;
       console.log(pq);

      document.getElementById("d1").innerHTML=pq;   

       if(pq.includes("exists")){
        alert("user already exists");
       }

     // document.getElementById("headerId").innerHTML= pq;
}
};
xhr.open("POST", "professor-fetch.php", true);
xhr.send(form);

}


function addVideo(){

}

	

	</script>
	<title>
		</title>
		<link rel="stylesheet" type="text/css" href="mijares.css">
</head>
<body>
	<h1>  Welcome to admin Console - to Regulate (fetch,delete,and upload) </h1>

	

	<h2> Submit the form below for Professors database upload</h2>

	<form name="frmImage" enctype="multipart/form-data" action=""
        method="post" class="frmImageUpload">
        <label>Upload Professor Image File:</label><br /> <input name="userImage"
            type="file" class="inputFile" /> 


Name:<input type="text" name="name" required>

Text: <input type="text" name="text1" required>





            <input type="submit"
            value="Submit" class="btnSubmit" />
    </form>

    <h2> If you wanna delete an entry from professors database hit name and click on the button  (will be deleted if name present in the database)</h2>

    Name:<input type="text" name="delname" id="delname" required>

    <button style="color:white;background-color:blue;" onclick="deleteProf()"> Delete Professor </button>

    <br />

    <br />
    <br />


<button style="color:white;background-color:blue;" onclick="fetchProf()"> Fetch Professors Names</button>

    <div id="d1"> </div>


   

   
</body>
</html> 
















