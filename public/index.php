<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>Form to Register or Login</h1>
	<!-- register form START -->
	<form action="">
		<label for="name">Name:</label>
		<input id="name" type="text" name="name">

		<label for="email">Email: </label>
		<input id="email" type="text" email="email">
		
		
		<fieldset>
			<legend>Type of User</legend>

			<input id="admin" type="checkbox" name="admin" value="admin">
			<label for="admin">Admin</label>

			<input id="agent" type="checkbox" nme="agent" value="agent">
			<label for="agent">Agent</label>

		</fieldset>

		<label for="password">Password: </label>
		<input id="password" type="password" name="password">

		<button type="submit">Register</button>
	</form>
  
</body>
</html>
