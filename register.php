<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="form.css">
	<style>
			
        </style>
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
			<h1>Register</h1>
			<form action="create-user.php" method="POST">
				<input type="text" name="name" placeholder="Username"><br>
				<input type="password" name="password" placeholder="Password"><br>
				<button type="submit" ">Register</button>
			</form>
		</center>
	</div>
</body>
</html>