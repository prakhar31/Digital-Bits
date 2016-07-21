<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Outstation Form</title>
	
</head>
<body>
	<h3>Enter your Details</h3><br>
	<?php 
		echo form_open('main/enter_details');
		
		echo "<p> Enter your exit date: ";
		echo form_input('exitdate');
		echo "</p>";
		
		echo "<p> Enter your exit time: ";
		echo form_input('exittime');
		echo "</p>";
		
		echo "<p> Enter your Destination: ";
		echo form_input('destination');
		echo "</p>";
		
		echo "<p> Enter your Return Date: ";
		echo form_input('returndate');
		echo "</p>";

		echo "<p> Enter your Return Time: ";
		echo form_input('returntime');
		echo "</p>";

		/*echo "<p> Enter your Father's Email: ";
		echo form_input('femail');
		echo "</p>";

		echo "<p> Enter your Mother's Email: ";
		echo form_input('memail');
		echo "</p>";

		echo "<p> Enter your Father's Mobile: ";
		echo form_input('fmobile');
		echo "</p>";

		echo "<p> Enter your Mother's Mobile: ";
		echo form_input('mmobile');
		echo "</p>";

		echo "<p> Enter your Hostel: ";
		echo form_input('hostel');
		echo "</p>";*/

		echo form_submit('apply_submit', 'Submit Details');
		echo form_close();
	?>


</body>
</html>