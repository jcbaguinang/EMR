<?php
// Start the session
session_start();
if ($_SESSION==null) {
	$_SESSION["login"] = 0;
	$_SESSION["username"] = '';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
	include('db.php');
	$login = $_SESSION["login"];
	if($login == 0){
		$username = $_POST["name"];
		$password = $_POST["password"];
		$sql= "SELECT username, password FROM users WHERE username='$username'";
		$isUser = $conn->query($sql);
		
		if($isUser->num_rows == 0){
			header('location:index.php?Message=Iqt seems like we don\'t know you yet. Please register first.');
		}
		else{
			while($row = $isUser->fetch_assoc()) {
		        if($password == $row["password"]){
	        		$_SESSION["username"] = $row["username"];
	        		$_SESSION["login"] = 1;	
		        }
		        else{
					header('location:index.php?Message=You must have typed a wrong password. Careful.');
				}
				break;

		    }

		}

	}
	$login = $_SESSION["login"];
	$username = $_SESSION["username"];
	if ($login==1) {
		include('nav.php');
		echo "<h3 align=\"center\">Welcome ".$username."!</h3><br><br>";
		$sql = "SELECT id, title, post_date, content, author FROM blogs ORDER BY post_date DESC";
		$result = $conn->query($sql);
		include('form.php');
	}
?>
</body>
</html>