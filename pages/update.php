<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Modifier un adhérent</title>
		<link rel="stylesheet" type="text/css" href="../inc/css/style.css">
	</head>

	<body>
		<?php
			require '../process/connect.php';

			$sql='SELECT * FROM annuaire WHERE id = '.$_GET['id'].'';
			$res=$bdd->query($sql);
			$resu=$res->fetch();
		?>

		<a href="index.php">Retour</a>
		
		<h1>Modifier</h1>

		<div class="fond">
			<form action="../process/traitement2.php" method="post">
			

				<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

				<div class="entreeform">
					<div class="left">
						<label for="nom">Nom</label>
					</div>
					<div class="right">
						<input type="text" name="nom" value="<?php echo $resu['nom'] ?>">
					</div>
				</div>
				
				<div class="entreeform">
					<div class="left">
						<label for="adresse">Adresse</label>
					</div>
					<div class="right">
						<input type="text" name="adresse" value="<?php echo $resu['adresse'] ?>">
					</div>
				</div>

				<div class="entreeform">
					<div class="left">
						<label for="cp">Code Postal</label>
					</div>
					<div class="right">
						<input type="text" name="cp" value="<?php echo $resu['code_postal'] ?>">
					</div>
				</div>
				
				<div class="entreeform">
					<div class="left">
						<label for="ville">Ville</label>
					</div>
					<div class="right">
						<input type="ville" name="ville" value="<?php echo $resu['ville'] ?>">
					</div>
				</div>

				<div class="entreeform">
					<div class="left">
						<label for="phone">Téléphone</label>
					</div>
					<div class="right">
						<input type="text" name="phone" value="<?php echo $resu['telephone'] ?>">
					</div>
				</div>

				<div class="entreeform">
					<div class="left">
						<label for="mail">E-mail</label>
					</div>
					<div class="right">
						<input type="text" name="mail" value="<?php echo $resu['mail'] ?>">
					</div>
				</div>

				<div class="entreeform">
					<div class="left">
						<label for="cat">Catégorie</label>
					</div>
					<div class="right">
						<select name="categorie">
							<option <?php if($resu['categorie'] == 'Adhérent') echo 'selected'; ?> value="Adhérent">Adhérent</option>
							<option <?php if($resu['categorie'] == 'Bureau') echo 'selected'; ?> value="Bureau">Bureau</option>
							<option <?php if($resu['categorie'] == 'CA') echo 'selected'; ?> value="CA">CA</option>
							<option <?php if($resu['categorie'] == 'Bienfaiteur') echo 'selected'; ?> value="Bienfaiteur">Bienfaiteur</option>
							<option <?php if($resu['categorie'] == 'Association') echo 'selected'; ?> value="Association">Association</option>
							<option <?php if($resu['categorie'] == 'Entreprise') echo 'selected'; ?> value="Entreprise">Entreprise</option>
							<option <?php if($resu['categorie'] == 'Collectivité') echo 'selected'; ?> value="Collectivité">Collectivité</option>
							<option <?php if($resu['categorie'] == 'Prospect') echo 'selected'; ?> value="Prospect">Prospect</option>
						</select>
					</div>
				</div>

				<div class="entreeform">
					<div class="left">
						<label for="com">Commentaire</label>
					</div>
					<div class="right">
						<input type="text" name="com" value="<?php echo $resu['commentaire'] ?>">
					</div>
				</div>
				
				<div class="ajout">
					<button type="submit" name="button">Envoyer</button>
				</div>
			</form>
		</div>
	</body>
</html>
