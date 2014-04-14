<?php
try{
	$conn=new PDO("mysql:host=localhost;dbname=partyout","root","");	
}catch(PDOException $e){
	$e->getMessage();
}


?>
