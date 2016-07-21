<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Rootmail Submit Form</title>
	
</head>
<body>
	<h3>Enter your Details</h3><br>
	<?php 
		echo form_open('main/submit');
		
		echo "<p>From :";
		echo form_input('from');
		echo "</p>";
		
		echo "<p>Subject : ";
		echo form_input('subject');
		echo "</p>";
		
		echo "<p>Data : ";
		echo form_input('data');
		echo "</p>";
		
		echo "<p>Date: ";
		echo form_input('date');
		echo "</p>";

		echo form_submit('apply_submit', 'Submit Details');
		echo form_close();
	?>


</body>
</html>