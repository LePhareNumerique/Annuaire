<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ajouter un contact</title>
		<link rel="stylesheet" type="text/css" href="../inc/CSS/style.css">
	</head>

	<body>
	
		<a href="../index.php">Retour</a>
		<h1>Ajouter un contact</h1>
		<div class="fond">
			<form action="../process/traitement.php" method="post">
				<div class="entreeform">
					<div class="left">
						<label for="nom">Nom</label>
					</div>
					<div class="right">
						<input type="text" name="nom" value="">
					</div>
				</div>

				<div class="entreeform">
					<div class="left">
						<label for="adresse">Adresse</label>
					</div>
					<div class="right">
						<input type="text" name="adresse" value="">
					</div>
				</div>


				<div class="entreeform">
					<div class="left">
						<label for="cp">Code Postal</label>
					</div>
					<div class="right">
						<input type="text" name="cp" value="">
					</div>
				</div>

				<div class="entreeform">
					<div class="left">
						<label for="ville">Ville</label>
					</div>
					<div class="right">
						<input type="text" name="ville" value="">
					</div>
				</div>

				<div class="entreeform">
					<div class="left">
						<label for="phone">Téléphone</label>
					</div>
					<div class="right">
						<input type="text" name="phone" value="">
					</div>
				</div>
	
				<div class="entreeform">
					<div class="left">
						<label for="mail">E-mail</label>
					</div>
					<div class="right">
						<input type="text" name="mail" value="">
					</div>
				</div>

				<div class="left">
					<label for="cat">Catégorie</label>
				</div>
				
				<div class="right">
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

				<div class="entreeform">
					<div class="left">
						<label for="com">Commentaire</label>
					</div>
					<div class="right">
						<input type="text" name="com" value="">
					</div>
				</div>
				
				<div class="ajout">
					<button type="submit" name="button">Envoyer</button>
				</div>
			</form>
		</div>
	</body>
</html>
