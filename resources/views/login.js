  function submitValidator(){

    var email=document.getElementById("email").value;

      var pass=document.getElementById("password").value;

       var t=validateChars(email);

       console.log(t);



      if(t){
        //alert("email according to pattern");

        var xhr = new XMLHttpRequest();

        var form = new FormData();

      form.append("email", email);
      form.append("password", pass);

      xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       // Typical action to be performed when the document is ready:

       var pq = xhr.responseText;
       console.log(pq);

       if(pq.includes("incorrect")){
        alert("incorrect password");
       }

       if(pq.includes("exist")){
        alert("userid doesnt exist. please register on register page");
       }

       if(pq.includes("admin")){

        window.location.href = 'admin.php';
        
       }

       if(pq.includes("student")){
        window.location.href = 'login-redirect.html';
        
       }

     // document.getElementById("headerId").innerHTML= pq;

       

 

 
    }
};
xhr.open("POST", "sonika-login.php", true);
xhr.send(form);





      }
      else{
        alert(" email not according to pattern");

        finalSubmit=false
      }




  }


  function validateChars(elementValue)
{
if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(elementValue))
  {
    return (true)
  }
    //alert("You have entered an invalid email address!")
    return (false)
}