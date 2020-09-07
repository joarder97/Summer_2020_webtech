function loginUser(){
    //alert("loginUser");
    var email = document.getElementById("email").value;
    var password = document.getElementById("password");

    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../php/loginController.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('email='+email+'&password='+password);
    //alert("send");
    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        //alert("1");
        document.getElementById("errors").innerHTML = this.responseText;
      }
    }   
}