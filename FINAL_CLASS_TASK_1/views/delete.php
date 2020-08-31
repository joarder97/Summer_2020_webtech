<?php
	require_once('user_list.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dlelete User Page</title>
</head>
<body>

	<h1>Delete User Page</h1>


	<table border=1> 
		<tr>
			<td>ID</td> 
			<td>NAME</td>
			<td>password</td> 
			<td>Email</td>
			<td>Action</td>
		</tr>
		
			<tr>
				<td><?= $_POST["$id"] ?></td>
				

				<td>
					<a href="edit.php?id=<?=$users[$i]['id']?>"> Edit</a> |
					<a href="delete.php?id=<?=$users[$i]['id']?>"> Delete</a> 

				</td>
			</tr>
	</table>

</body>
</html>