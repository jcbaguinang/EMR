<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		session_destroy();
		header('location:index.php?Message=Thank your for being with us.');
	?>
</body>
</html>