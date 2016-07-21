<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit Profile</title>
	
</head>
<body>
	<h3>Edit your profile(Staff Only)</h3><br>
	<?php 
		echo form_open('main/edit_password');
		echo "<p> New Password: ";
		echo form_password('newpassword');
		echo "</p>";
		echo form_submit('pass_submit', 'Change Password');
		echo form_close();
	?>
	<?php 
		echo form_open('main/edit_native');
		echo "<p> New Native";
		echo form_input('native');
		echo "</p>";
		echo form_submit('native_submit', 'Change Native');
		echo form_close();
	?>
	<?php 
		echo form_open('main/edit_mobile');
		echo "<p> New Mobile Number";
		echo form_input('staffmobile');
		echo "</p>";
		echo form_submit('staffmobile_submit', 'Change Mobile Number');
		echo form_close();
	?>

	<a href='<?php echo base_url() . "index.php/main/view_profile" ?>'>View Updated Profile</a>


</body>
</html>