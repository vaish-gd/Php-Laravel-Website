

function setParameters(pq) {


	arr = pq.split(";")

	var arr2= arr;

	/*if(arr.length >4){

		var arr2=arr.subarray(0, 4);
	}
	else{
		arr2=arr;
	}*/

//$row["url"].",".$row["no"].",".$row["title"].",".$row["text"].";

	for(var i=0;i<arr2.length;i++){
		var abc= arr2[i].split(",")

		var iframe1= document.getElementById("url"+(i+1).toString())

		console.log()

		var p= document.getElementById("p"+(i+1))

		var title= document.getElementById("title"+(i+1).toString())

		iframe1.src = abc[0]

		title.innerHTML = abc[2]

		p.innerHTML = abc[3]




		}

	}
	













function fetchVideosFromDb(){

	var xhr = new XMLHttpRequest();

        var form = new FormData();

      

        xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       // Typical action to be performed when the document is ready:

       //var pq = xhr.responseJSON;

       var pq = xhr.responseText;

      // document.getElementById("headerId").innerHTML=  pq;





       //var myarr = pq.split(",")

       console.log(pq);

      // var myArr = JSON.parse(pq);
       

      //document.getElementById("headerId").innerHTML=  pq;

      setParameters(pq);

       

 

 
    }
};
xhr.open("GET", "videos.php", true);
xhr.send();



}

fetchVideosFromDb();