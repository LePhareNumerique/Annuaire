<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ajouter un membre</title>
		<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
	</head>

	<body>
	
		<a href="read.php">Retour</a>
		<h1>Ajouter un membre</h1>
		<div class="fond">
			<form action="../process/traitement.php" method="post">
				<div>
					<label for="nom">Nom</label>
					<input type="text" name="nom" value="">
				</div>

				<div>
					<label for="adresse">Adresse</label>
					<input type="text" name="adresse" value="">
				</div>


				<div>
					<label for="cp">Code Postal</label>
					<input type="text" name="cp" value="">
				</div>

				<div>
					<label for="ville">Ville</label>
					<input type="text" name="ville" value="">
				</div>

				<div>
					<label for="phone">Téléphone</label>
					<input type="text" name="phone" value="">
				</div>
	
				<div>
					<label for="mail">E-mail</label>
					<input type="text" name="mail" value="">
				</div>

				<div>
					<select name="categorie">
						<option value="Adhérent">Adhérent</option>
						<option value="Bureau">Bureau</option>
						<option value="CA">CA</option>
						<option value="Bienfaiteur">Bienfaiteur</option>
						<option value="Association">Association</option>
						<option value="Entreprise">Entreprise</option>
						<option value="Collectivité">Collectivité</option>
						<option value="Prospect">Prospect</option>
					</select>
				</div>

				<div>
					<label for="com">Commentaire</label>
					<input type="text" name="com" value="">
				</div>

				<button type="submit" name="button">Envoyer</button>
			</form>
		</div>
	</body>
</html>
