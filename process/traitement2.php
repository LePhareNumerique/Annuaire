<?php
	require '../process/connect.php';
	
	$requete = $bdd->PREPARE('UPDATE annuaire SET nom=?, adresse=?, code_postal=?, ville=?, telephone=?, mail=?, categorie=?, commentaire=? WHERE id = '.$_POST["id"]);
	
	$requete->execute(array($_POST['nom'],$_POST['adresse'],$_POST['cp'],$_POST['ville'],$_POST['phone'],$_POST['mail'],$_POST['categorie'], $_POST['com']));
	
	header('location: ../index.php');