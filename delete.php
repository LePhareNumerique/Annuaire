<?php
	require 'connect.php';
	
	$sql='DELETE FROM annuaire WHERE id ='.$_GET["id"];

	$bdd->exec($sql);
	
	header('location: read.php');
?>