<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
		if( !empty( $_REQUEST['Message'] ) )
	{
    echo "<p class=\"message\">".$_REQUEST['Message']."</p>";
	}
	?>
	<h3>Welcome!</h3>
	<b>Please login to continue.</b>
	<form action="home.php" method="post">
		Username: <input type="text" name="name"><br>
		Password: <input type="password" name="password"><br>
		<button type="submit">Login</button>
		<button formaction="register.php">Register</button>
	</form>
</body>
</html>