<?php
	$conn = new mysqli('localhost', 'root', '', 'cars');

	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>