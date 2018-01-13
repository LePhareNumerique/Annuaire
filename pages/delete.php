<?php
	require '../process/connect.php';
	
	$sql='DELETE FROM annuaire WHERE id ='.$_GET["id"];

	$bdd->exec($sql);
	
	header('location: ../index.php');
?>