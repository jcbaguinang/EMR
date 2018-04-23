<?php
// Start the session
session_start();
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div>
		<?php
		include('nav.php');
		include('db.php');
		$user=$_GET["username"];
		echo "<h3 align=\"center\">Welcome to ".$user."'s blog page!</h3><br><br>";
		$sql = "SELECT id, title, post_date, content, author FROM blogs WHERE author = '$user' ORDER BY post_date DESC";
		$result = $conn->query($sql);
		include('blogs.php');
	?>
	</div>
</body>
</html>