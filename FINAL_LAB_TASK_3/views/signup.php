<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<body>
	<form>
		<fieldset>
			<legend>REGISTRATION</legend>
			ID: <input type="text" name="id" id="id"><br><br>
			Password: <input type="password" name="password" id="password"><br><br>
			Confirm Password: <input type="password" name="confirmPassword" id="confirmPassword"><br><br>
			Name: <input type="text" name="name" id="name"><br><br>
			Email: <input type="email" name="email" id="email"><br><br>
				User Type:
			<select id="type">
			  <option value="user">User</option>
			  <option value="admin">Admin</option>
			</select><br>
			<div id="div"></div>
			<input type="button" name="submit" id="submit" value="submit" onclick="createUser()">
	</fieldset>
	</form>
</body>
	<script type="text/javascript">
		function createUser(){
			var id = document.getElementById("id").value;
			var password = document.getElementById("password").value;
			var confirmPassword = document.getElementById("confirmPassword").value;
			var name = document.getElementById("name").value;
			var email = document.getElementById("email").value;
			var type = document.getElementById("type").value;

			var xhttp = new XMLHttpRequest();
			 xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			      document.getElementById("div").innerHTML =
			      this.responseText;
			    }

			xhttp.open('POST', '../php/signupController.php', true);
		   	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		    xhttp.send("../php/signupcontroller.php?id=id&password=password&confirmPassword=confirmPassword&name=name&email=email&type=type");
	}
	</script>
</html>