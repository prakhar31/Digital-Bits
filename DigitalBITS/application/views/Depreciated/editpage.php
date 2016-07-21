<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit Profile</title>
	
</head>
<body>
	<h3>Edit your profile</h3><br>
	<?php 
		echo form_open('main/edit_password');
		echo "<p> New Password: ";
		echo form_password('newpassword');
		echo "</p>";
		echo form_submit('pass_submit', 'Change Password');
		echo form_close();
	?>
	<?php 
		echo form_open('main/edit_f_email');
		echo "<p> New Father's Email: ";
		echo form_input('femail');
		echo "</p>";
		echo form_submit('femail_submit', 'Change Father Email');
		echo form_close();
	?>
	<?php 
		echo form_open('main/edit_m_email');
		echo "<p> New Mother's Email: ";
		echo form_input('memail');
		echo "</p>";
		echo form_submit('memail_submit', 'Change Mother Email');
		echo form_close();
	?>
	<?php 
		echo form_open('main/edit_s_mobile');
		echo "<p> New Student's Mobile Number";
		echo form_input('smobile');
		echo "</p>";
		echo form_submit('smobile_submit', 'Change Student Mobile Number');
		echo form_close();
	?>
	<?php 
		echo form_open('main/edit_f_mobile');
		echo "<p> New Father's Mobile Number";
		echo form_input('fmobile');
		echo "</p>";
		echo form_submit('fmobile_submit', 'Change Father Mobile Number');
		echo form_close();
	?>
	<?php 
		echo form_open('main/edit_m_mobile');
		echo "<p> New Mother's Mobile Number";
		echo form_input('mmobile');
		echo "</p>";
		echo form_submit('mmobile_submit', 'Change Mother Mobile Number');
		echo form_close();
	?>
	<?php 
		echo form_open('main/edit_address');
		echo "<p> New Address";
		echo form_input('address');
		echo "</p>";
		echo form_submit('address_submit', 'Change Address');
		echo form_close();
	?>
	<?php 
		echo form_open('main/edit_hostel');
		echo "<p> New Hostel";
		echo form_input('hostel');
		echo "</p>";
		echo form_submit('hostel_submit', 'Change Hostel');
		echo form_close();
	?>
	<?php 
		echo form_open('main/edit_roomno');
		echo "<p> New Room Number";
		echo form_input('roomno');
		echo "</p>";
		echo form_submit('roomno_submit', 'Change Room Number');
		echo form_close();
	?>

	<a href='<?php echo base_url() . "index.php/main/view_profile" ?>'>View Updated Profile</a>


</body>
</html>