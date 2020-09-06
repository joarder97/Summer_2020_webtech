<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
	<form>
		<fieldset>
			<h3>REGISTRATION</h3>
			ID: <input type="text" name="id" id="id"><br><br>
			Password: <input type="password" name="password" id="password"><br><br>
			Confirm Password: <input type="password" name="confirmPassword" id="confirmPassword"><br><br>
			Name: <input type="text" name="name" id="name"><br><br>
			Email: <input type="email" name="email" id="email"><br><br>
			User Type:
			<select id="type">
				<option value="user">User</option>
				<option value="admin">Admin</option>
			</select><br><br>
			<div id="div"></div>
			<input type="button" name="submit" id="submit" value="submit" onclick="createUser()">   
			<input type="button" name="redirectToIndex" id="redirectToIndex" value="Back" onclick="redirectToindex_()">
			<input type="button" name="loginBtn" value="LoginBtn" style="visibility : hidden" id="loginBtn" onclick="redirect()"><br>
			<div id="error"></div>
		</fieldset>
	</form>
</body>

<script type="text/javascript" src = "../assets/js/user.js">
	
</script>
</html>