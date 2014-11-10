<?php
require_once ("_archix/User.php");
$user = new User();
if (isset($_POST['flag'])) {
	$flag = $_POST['flag'];

	switch ($flag) {
		case "create-user" :
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$location = $_POST['location'];
			$dob = $_POST['dob'];
			$username = $_POST['username'];
			$auth = $_POST['password'];
			
			$fields = array('firstname', 'lastname', 'email', 'location', 'dob', 'username', 'auth');
			$fieldvalues = compact($fields);
			$user -> createUser($fieldvalues);
			break;
	}

} else {
	echo json_encode("not set");
}

?>