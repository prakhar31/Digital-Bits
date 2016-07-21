<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Your Profile</title>

	
</head>
<body>

<div id="container">
	<h1>User Details</h1><br>

	<?php 
	echo form_open('main/req_submit');
	foreach($start as $mediator){
		
		echo form_checkbox('requests', 'accept', TRUE);
		foreach($mediator as $key => $val){
			echo $key . " : " . $val;
			echo "</br>";
		}	
	}
	echo form_close();

	?>
	<a href='<?php echo base_url() . "index.php/main/logout" ?>'>Logout</a>

</div>

</body>
</html>