<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>New Web Project</title>
	</head>
	<body>
		<h1>New Web Project Page</h1>
		<?php
		error_reporting(0);
		class CreateUser {
			public $empty = array();

			function valdFrm() {
				$firstname = "Ian";
				$lastname = "";

				$fields = array("firstname", "lastname");

				$result = compact($fields);
				$vals=array_values($fields);
				$out=array("img",$result,"id");
				
				var_dump($vals);
				
			}

			function echovalues($elem, $key) {
				if(empty($elem)){
					array_push($this->empty[$key], $elem);
				}
				
			}

		}
		
		$u=new CreateUser();
		$u->valdFrm();
		?>
	</body>
</html>

