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
			<div id="error"></div>
		</fieldset>
	</form>
</body>
<script type="text/javascript" src = "../js/user.js">
	
</script>
</html>