<?php 

try {
	
	$db = new PDO("mysql:host=localhost;dbname=sub_category;charset=utf8;", "root", "6789");


} catch (PDOException $e) {
	
	echo $e->getMessage();

}

 ?>