<?php

	// Security
	include "./include/security.php";
	
	// Include config file
	require_once "config-export.php";

	$sql= "SELECT * FROM web_admin";  // Query 

	$filename='Logins.csv';  // file name 
	header( 'Content-Type: text/csv' );
	header( 'Content-Disposition: attachment;filename='.$filename);
	$fp = fopen('php://output', 'w');

	if($stmt = $connection->query("$sql")){
	$no_of_columns=$stmt->field_count;
	$row = mysqli_fetch_assoc($stmt);
	fputcsv($fp, array_keys($row)); // put headers 
	fputcsv($fp, array_values($row)); // put the first row
	while ($row = $stmt->fetch_array(MYSQLI_NUM)) {
	fputcsv($fp, $row);
	}
	fclose($fp);
	}else{
	echo $connection->error;
	}

?>



