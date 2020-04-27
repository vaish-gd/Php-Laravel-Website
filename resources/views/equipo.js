

function setParameters(pq,index1) {


console.log("inside setparam")
console.log(index1)
console.log("inside setparam")

	arr = pq.split(";;;")

	var arr2= arr;

	/*if(arr.length >4){

		var arr2=arr.subarray(0, 4);
	}
	else{
		arr2=arr;
	}*/

//$row["url"].",".$row["no"].",".$row["title"].",".$row["text"].";

var count1=21;

console.log("arr length")

console.log(arr2.length)

	for(var i=0;i< arr2.length;i++){

		var abc= arr2[0].split("^^%")

		
		count1=index1;

		console.log("abc[0]")
		console.log(abc[0])
		console.log("abc[1]")
		console.log(abc[1])

		//console.log("h"+count1.toString())

		//console.log("p"+count1.toString())

		var index2= index1.toString();

		var hid="h"+ index2




if(index1==21){

document.getElementById("h21").innerHTML= abc[0]

	document.getElementById("p21").innerHTML= abc[1]

}
		
	

		count1++;

		




		}

	}
	













function fetchFromDb(i){

	console.log("i in fetch from db is ")
	console.log(i)


	var xhr = new XMLHttpRequest();

        var form = new FormData();

        console.log("aaaafdfsgddf "+i);
	var form = new FormData();
	form.append("id", i);
	xhr.open("POST", "equipo.php", true);
xhr.send(form);

      

        xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       // Typical action to be performed when the document is ready:

       //var pq = xhr.responseJSON;

       var pq = xhr.responseText;

       console.log(pq);

       //document.getElementById("headerId").innerHTML=  pq;


       setParameters(pq,i);

       if(i+1<=26){
       	fetchFromDb(i+1);
       }
       





       //var myarr = pq.split(",")

       //console.log(pq);

      // var myArr = JSON.parse(pq);
       

      //document.getElementById("headerId").innerHTML=  pq;

      

       

 

 
    }
};






}


	fetchFromDb(21);


//fetchFromDb();