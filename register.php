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
	<form action="create-user.php" method="POST">
		Username: <input type="text" name="name"><br>
		Password: <input type="password" name="password"><br>
		<button type="submit" ">Register</button>
	</form>
</body>
</html>