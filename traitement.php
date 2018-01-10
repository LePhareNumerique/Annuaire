<?php
	require 'connect.php';
	
	$requete = $bdd->PREPARE('INSERT INTO annuaire SET nom=?, adresse=?, code_postal=?, ville=?, telephone=?, mail=?, categorie=?');
	
	$requete->execute(array($_POST['nom'],$_POST['adresse'],$_POST['cp'],$_POST['ville'],$_POST['phone'],$_POST['mail'],$_POST['categorie']));
	
	header('location: read.php');