//signupPage input submit to create user
function createUser(){
	var id = document.getElementById("id").value;
	var password = document.getElementById("password").value;
	var confirmPassword = document.getElementById("confirmPassword").value;
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var type = document.getElementById("type").value;

	//sending http request
	var xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../php/signupcontroller.php', true);
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xhttp.send('id='+id+'&password='+password+'&confirmPassword='+confirmPassword+'&name='+name+'&email='+email+'&type='+type);
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			//change inner html and display login button
			document.getElementById("error").innerHTML = this.responseText;
			//document.getElementById("loginBtn").style.visibility = "visible";
			if(this.responseText == "User Created. Please Log in to proceed."){
				document.getElementById("loginBtn").style.visibility = "visible";
			}
		}
		//else{
			//document.getElementById("loginBtn").style.visibility = "visible";
		//}
	}
}
//redirect to login page for login button
function redirect(){
	window.location.href = "../views/login.php";
}
//redirect ti index from signupPage Back Button
function redirectToindex_ (){
	window.location.href = "../index.php";
}