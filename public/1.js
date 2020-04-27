
    function submitValidator(){

      

      var p=document.getElementById("email").value;

      var pass=document.getElementById("email").value;

      var finalSubmit=true

      var t=validateChars(p);

      var pass1=document.getElementById("password").value;

      var pass2=document.getElementById("confirmPassword").value;

      var t1=validatepasswords(pass1,pass2);

      console.log(t);

      console.log(p);

      if(t){
        //alert("email according to pattern");
      }
      else{
        alert(" email not according to pattern");

        finalSubmit=false
      }
      if(t && t1){

        //do the ajax part where it is sent to server.

        var xhr = new XMLHttpRequest();

        var form = new FormData();

      form.append("email", document.getElementById("email").value);

      form.append("password", document.getElementById("password").value);

      form.append("name1", document.getElementById("name1").value);

      form.append("address", document.getElementById("address").value);

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
xhr.open("POST", "sonika.php", true);
xhr.send(form);




      }
      

    }


    function validatepasswords(pass1,pass2){
      if(pass1!=pass2){
        
        alert("password and confirmPassword dont match");
        return false
      }

      if(pass1.length<8 || pass1.length>10 ){
        alert("password length isnt between 8-10");
        return false
      }

      

        var lowerletter = /[a-z]/; 
        var upperLetter =  /[A-Z]/;
    var number = /[0-9]/;

    var specialCharacters = /[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/
    var valid = number.test(pass1) && lowerletter.test(pass1) && 
    upperLetter.test(pass1) && specialCharacters.test(pass1); //match a letter _and_ a number

    if(valid==false){
      alert("password must include at least 1 uppercase, 1lowercasse, 1specialcharacter and 1 numerical");
    }
    return valid;



      


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