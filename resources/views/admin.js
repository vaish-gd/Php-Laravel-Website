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