function createUser(){
	var id = document.getElementById("id").value;
	var password = document.getElementById("password").value;
	var confirmPassword = document.getElementById("confirmPassword").value;
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var type = document.getElementById("type").value;


	var xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../php/signupcontroller.php', true);
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xhttp.send('id='+id+'&password='+password+'&confirmPassword='+confirmPassword+'&name='+name+'&email='+email+'&type='+type);
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("error").innerHTML = this.responseText;
			// document.getElementById('data').innerHTML =  this.responseText;
			//document.getElementsByTagName('h2')[0].innerHTML = "Success";
			document.getElementById('loginBtn').style.display = "inline";
			// console.log(document.getElementById('loginButton'));
		}
	}
}