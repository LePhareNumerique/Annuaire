<?php
	require 'connect.php';
	
	$requete = $bdd->PREPARE('UPDATE annuaire SET nom=?, adresse=?, code_postal=?, ville=?, telephone=?, mail=?, categorie=? WHERE id = '.$_POST["id"]);
	
	$requete->execute(array($_POST['nom'],$_POST['adresse'],$_POST['cp'],$_POST['ville'],$_POST['phone'],$_POST['mail'],$_POST['categorie']));
	
	header('location: read.php');