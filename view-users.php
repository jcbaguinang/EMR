<?php
// Start the session
session_start();
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>All Users</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
		include('nav.php');
		include('db.php');
		$sql = "SELECT username FROM users ORDER BY username";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			echo "<h3 align=\"center\">Users List</h3>";
			while($row = $result->fetch_assoc()) {
	    		echo "<div class=\"users\"><a href=\"profile.php?username=".$row["username"]."\">".$row["username"]. "</a></div>";
				}
		} else {
				echo "0 results";
		}
	?>
</body>
</html>