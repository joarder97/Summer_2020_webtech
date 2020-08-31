<?php
	
	if(isset($_GET['error'])){
		if($_GET['error'] == 'dberror'){
			echo "something wrong ...please try again.";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup page</title>
</head>
<body>
	<form action="../php/signupController.php" method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="button" name="submit" value="Submit" onclick="request()"></td>
					<td><a href="login.php" style="display: none" id="dis">Login</a></td>
				</tr>
			</table>
		</fieldset>
	</form>

	<script type="text/javascript">
		function request(){
			var name = document.getElementById('username').value;
			var pass = document.getElementById('password').value;
			var email = document.getElementById('email').value;

			xhttp.open('POST', '../php/signupController.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('name='+username);
			xhttp.send('password='+password);
			xhttp.send('email='+email);

			xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById('dis').style.display = "visible" ;

				}


		}
	}

	</script>


</body>
</html>