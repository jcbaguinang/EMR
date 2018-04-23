<?php
session_start();
$_SESSION["username"] ='';
$_SESSION["login"] = 0;

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "le01";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$username=$_POST['name'];
	$password =$_POST['password'];
	$sql= "SELECT username, password FROM users WHERE username='$username'";
	$isUnique =  $conn->query($sql);

		if($isUnique->num_rows > 0){
			header('location:register.php?Message=Username is taken');
		}
		else{
			$sql = "INSERT INTO users (username, password)
	VALUES ('$username', '$password')";
			if ($conn->query($sql) === TRUE) {
		    $_SESSION["username"] =$username;
			$_SESSION["login"] = 1;
			header('location:home.php');
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

		}
		
	?>
</body>
</html>