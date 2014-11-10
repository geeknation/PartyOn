<?php
include "EntelDB.php";
include "EntelUsers.php";
class User {

	private $empty = array();
	public function createUser($fieldvalues) {
		$db = new EntelDB("bigoak_partyon", "bigoak_partyon", "oppositeihub14");
		$user = new EntelUser();
		array_walk($fieldvalues, "User::checkNull");
		if (count($this -> empty) >= 1) {
			echo json_encode($this -> empty);
		} else {
			static $conn;
			$conn = $db -> conn;
			$userid = $user -> generateUserCode();
			$imagepath = "";
			$query = "INSERT INTO users(userId,firstName,lastName,email,location,birthday,username,auth,image) VALUES(?,?,?,?,?,?,?,?,?)";
			$arrayvalues=array_values($fieldvalues);
			$dbvals=array_merge((array)$userid,$arrayvalues,(array)$imagepath);
			$dbvals[7]=md5($dbvals[7]);//hash the password
			$stmt = $conn -> prepare($query);
			$stmt -> execute($dbvals);
			$feedback;
			if ($stmt -> rowCount() == 1) {
				$feedback = array("action" => "create-account", "message" => "account created");
				echo json_encode($feedback);
			} else {
				$feedback = array("action" => "create-account", "message" => "error creating account");
				echo json_encode($feedback);
			}
		}

	}

	function checkNull($value, $key) {
		if (empty($value)) {
			$this -> empty[$key] = $key;
		}
	}

}
?>