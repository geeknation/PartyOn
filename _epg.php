<?php

if(isset($_POST['firstname'])){
	echo json_encode("set");
	
}else{
	echo json_encode("not set");
}
?>