<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="form.css">
</head>
<body>
	<?php
		if( !empty( $_REQUEST['Message'] ) )
	{
    // echo "<p class=\"message\">".$_REQUEST['Message']."</p>";
	}
	?>
	<div class="rcorners2">
		<center>
			<h1>Welcome!</h1>
			<b>Please login to continue.</b>
			<form action="home.php" method="post">
				<input type="text" name="name" placeholder="Username"><br>
				<input type="password" name="password" placeholder="Password"><br>
				<input name="submit" type="submit" value="Login" />
			</form>
			<p>Not registered yet? <a href='register.php'>Register Here</a></p>
		</center>
	</div>
</body>
</html>