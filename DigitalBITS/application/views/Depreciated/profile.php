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

	/*echo "<pre>";
	print_r($this->session->all_userdata());
	echo "</pre>";
	?>
	*/
	?>
	<?php foreach( $pass_row as $mediator){
		foreach( $mediator as $key => $val){
			echo $key . " : " . $val;
			echo "<br/>";
		}  
	} 
	?>

	<a href='<?php echo base_url() . "index.php/main/edit_page" ?>'>Edit Profile</a><br>

	<a href='<?php echo base_url() . "index.php/main/members" ?>'>Back</a>
</div>

</body>
</html>