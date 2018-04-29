<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body onload="storefunction();">
    
    <div id="demo">
	 	
	</div> 
	<form action="stats.php">
		<div>Name:
			<input type="text" placeholder="Last Name" name="last_name" required>
			<input type="text" placeholder="First Name" name="first_name"  required>
			<input type="text" placeholder="Middle Name" name="middle_name"  required>
		</div>
		
		<div>
			Address:
			<input type="text" placeholder="Street" name="street"  required>
			<input type="text" placeholder="Barangay" name="barangay"  required>
			<input type="text" placeholder="City/Town"  name="city"  required>
			<input type="text" placeholder="Province" name="province"  required>
		</div>
		
		<div>
			Sex:
			<input type="radio" name="sex" checked="checked">
			<input type="radio" name="sex">
		</div>

		<div>
			Contact Details:
			<input type="number" name="contact_number" placeholder="Cellphone number" >
			<input type="email" name="email">
		</div>

		<div>
			Date of Birth:
			<input type="date" name="birth_date"  required>
		</div>

		<div>
			Marital/Civil Status
			<input type="radio" name="civil_status" checked="checked" value="Single"  required>Single
			<input type="radio" name="civil_status" value="Married"  required>Married
		</div>

		<div>
			Emergency Contact Details:
			<div>Name:
				<input type="text" name="emergency_last_name"  required> 
				<input type="text" name="emergency_first_name"  required>
				<input type="text" name="emergency_middle_initial"  required>
			</div>
			
			<div>
				Relationship:
				<input type="text" name="relationship"  required>
			</div>

			<div>
				Address:
				<input type="text" name="emergency_street" required>
				<input type="text" name="emergency_barangay"  required>
				<input type="text" name="emergency_city">
				<input type="text" name="emergency_province"  required>
			</div>

			<div>Bloodtype
				<select name="blood_type" required>
					<option>A</option>
					<option>AB</option>
					<option>B</option>
					<option>O</option>

				</select>
			</div>

			<div>
				Medical Information:
				Allergies:
				<input type="text" name="medical_information"  required>
				Medical History:
				<input type="text" name="medical_history"  required>
				Notes:
				<input type="text" name="medical_notes"  required>
			</div>
		</div>
		<button type="submit" >Submit</button>
	</form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.jss"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script src="time.js"> </script>	
	
</html>