<!DOCTYPE html>
<html>
<head></head>
<body></body>
<?php
    include('db.php');

    $username = $_POST['user'];
    $data = $_POST['fields'];
    $fields = json_decode($data, true);
   	// $var_dump($fields);
    foreach ($fields as $field) {
    	$name = $field["name"];
    	$time = $field["time"];
    	$sql = "INSERT INTO  times (username, field, time)
	VALUES ('$username', '$name', '$time')";
			if ($conn->query($sql) === TRUE) {
				echo "Success";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }
?>

</html>