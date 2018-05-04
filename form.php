<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="form.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.jss"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
	<script src="time.js"> </script>
</head>

<?php
	$username = $_SESSION["username"];
?>

<body onload="storefunction();">
	<div id="demo">
		
	</div>
    <div class="rcorners1">
		<form action="" method="POST">
			<div>
				<i>Name:<i> &emsp;&nbsp;
				<input type="text" placeholder="Last Name" name="last_name" required>
				<input type="text" placeholder="First Name" name="first_name"  required>
				<input type="text" placeholder="Middle Name" name="middle_name">
			</div>
			
			<div>
				Address: &nbsp;
				<input type="text" placeholder="Street" name="street"  required>
				<input type="text" placeholder="Barangay" name="barangay"  required>
				<input type="text" placeholder="City/Town"  name="city"  required><br>&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
				<input type="text" placeholder="Province" name="province"  required>
			</div>
			
			<div><br>
				Sex: &emsp;&emsp;
				<input type="radio" name="sex" checked="checked">Female&emsp;
				<input type="radio" name="sex">Male
			</div>

			<div>
				Contact Details: &nbsp;
				<input type="number" name="contact_number" placeholder="Cellphone number">&emsp;
				<input type="email" name="email" placeholder="Email Address">
			</div><br>

			<div>
				Date of Birth: &emsp;&nbsp;&nbsp;
				<input type="date" name="birth_date"  required>
			</div><br>

			<div>
				Civil Status: &emsp;
				<input type="radio" name="civil_status" checked="checked" value="Single"  required>Single&emsp;
				<input type="radio" name="civil_status" value="Married"  required>Married
			</div><br>

			<div>Bloodtype: &emsp;&emsp;
					<select name="blood_type" required>
						<option>A</option>
						<option>AB</option>
						<option>B</option>
						<option>O</option>
					</select>
			</div><hr>

			<div>
				Emergency Contact Details: 
				<div>&emsp;Name: &emsp;&emsp;&nbsp;&nbsp;
					<input type="text" name="emergency_last_name"  placeholder="Last Name" required> 
					<input type="text" name="emergency_first_name" placeholder="First Name" required>
					<input type="text" name="emergency_middle_initial" placeholder="Middle Initial" required>
				</div>
				
				<div>
					&emsp;Relationship:
					<input type="text" name="relationship" placeholder="ex. Sibling, Mother" required>
				</div>

				<div>
					&emsp;Address: &emsp;&nbsp;&nbsp;
					<input type="text" name="emergency_barangay" placeholder="Barangay" required>
					<input type="text" name="emergency_city" placeholder="City">
					<input type="text" name="emergency_province" placeholder="Province" required>
				</div><hr>

				<div>
					Medical Information: (if you have none, just put n/a)<br>
					&emsp; Allergies: &nbsp;
					<input type="text" name="medical_information"  required>
					&emsp; Medical History: &nbsp;
					<input type="text" name="medical_history"  required><br>
					&emsp; Notes: &emsp;&nbsp;&nbsp;
					<input type="text" name="medical_notes"  required>
				</div>
			</div>
		</form><br>
	<center>
		<button class="bttn" onclick="allFields('<?php echo $username ?>')">Submit</button>
	</center>
	</div><br>
</body><hr>

	
</html>