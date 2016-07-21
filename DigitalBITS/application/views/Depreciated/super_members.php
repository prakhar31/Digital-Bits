<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Member's Page</title>

	
</head>
<body>

<div id="container">
	<h1>Member's page</h1>

	<?php

	//echo "<pre>";
	//print_r($this->session->all_userdata());
	//echo "</pre>";
	?>
	<h3>Welcome user, you have successfully signed in....</h3>

	<a href='<?php echo base_url() . "index.php/main/pending_req" ?>'>Pending Requests</a><br>
	<a href='<?php echo base_url() . "index.php/main/view_profile" ?>'>View Profile</a><br>

	<a href='<?php echo base_url() . "index.php/main/logout" ?>'>Logout</a>


</div>

</body>
</html>