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
		<input id="name" type="text" name="name" placeholder="insert your name" aria-invalid="true">

		<label for="email">Email: </label>
		<input id="email" type="email" email="email" placeholder="insert your email">
		
		<fieldset>
			<legend>Type of User</legend>

			<input id="admin" type="radio" name="admin" value="admin">
			<label for="admin">Admin</label>

			<input id="agent" type="radio" nme="agent" value="agent">
			<label for="agent">Agent</label>

		</fieldset>

		<label for="password">Password: </label>
		<input id="password" type="password" name="password" placeholder="insert your password" aria-describedby="password-hint" aria-invalid="true">
		<div id="password-hit">Please enter minimum 8 characters long</div>
 

		<button type="submit">Register</button>
	</form>
  
</body>
</html>
