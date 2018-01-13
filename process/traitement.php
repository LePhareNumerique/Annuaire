<?php
	require 'connect.php';
	
	$requete = $bdd->PREPARE('INSERT INTO annuaire SET nom=?, adresse=?, code_postal=?, ville=?, telephone=?, mail=?, categorie=?, commentaire=?');
	
	$requete->execute(array($_POST['nom'],$_POST['adresse'],$_POST['cp'],$_POST['ville'],$_POST['phone'],$_POST['mail'],$_POST['categorie'], $_POST['com']));
	
	header('location: ../index.php');