<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Login or Sign up</title>
	
	<link rel="stylesheet" href="/assignment/style.css">
	
</head>

<body>
	<section id="createUserPage">
		<form method="post" id="userSignUp" action="createUser.php">
			<label for='username'>Username</label>
			<input id='username' name='username' type = "text">
			<br>
			
			<label for='email'>Email</label>
			<input id='email' name="email" type = "email">
			<br>
			
			<label for='password'>Password</label>
			<input id='password' name="password" type = "password">
			<br>
			
			<label for='confirmPassword'>Confirm Password</label>
			<input id='confirmPassword' type = "password">
			<br>
			
			<input type="submit" value="submit"></input>
		</form>
	</section>
	
	<script src="login.js"> </script>
</body>

</html>
		