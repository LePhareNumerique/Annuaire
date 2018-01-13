<!-- Connexion à la base de données -->

<?php	
	$serveur = "localhost";
	$login = "root";
	$pass = "";

	try{
	$bdd = new PDO("mysql:host=$serveur;dbname=lepharenumerique;charset=utf8", $login, $pass);
	$bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	catch(PDOException $error){
		echo 'Échec de la connexion: ' .$error->getMessage();
	}