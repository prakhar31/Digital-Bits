<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>IPC Chief's View</title>
	
</head>
<body>
	<h3>Here are email requests</h3><br>
	

	<?php 
	echo form_open('main/send_emails');
	foreach($start as $mediator){
		
		echo form_checkbox('requestsf[]' , $mediator->id , TRUE);
		foreach($mediator as $key => $val){
			echo $key . " : " . $val;
			echo "</br>";
		}

		
	}
	echo form_password('req_pass');	
	echo form_submit('mysubmit', 'Send Emails');
	echo form_close();

	?>


</body>
</html>