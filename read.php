<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Annuaire</title>
  </head>

  <body>
    <h1>Liste des membres</h1>

    <form class="cherche" method="GET">
      <input type="search" placeholder="Recherche" name="q"/>
      <input type="submit" value="Valider" name="">
    </form>
<br>
    <table>
      <tr>
          <th>Nom</th>
          <th>Adresse</th>
          <th>Code Postal</th>
          <th>Ville</th>
          <th>Téléphone</th>
          <th>E-mail</th>
          <th>Type de membre</th>
          <th>Modifier</th>
      </tr>

      <!-- Afficher la liste des contacts -->
      <?php
        require 'connect.php';
        $reponse = $bdd->query('SELECT * FROM annuaire ORDER BY id ASC');

        if(isset($_GET['q']) AND !empty($_GET['q'])){
          $q = htmlspecialchars($_GET['q']);
          $reponse = $bdd->query('SELECT * FROM annuaire WHERE nom LIKE "%'.$q.'%" ORDER BY nom ASC');
          if($reponse->rowcount() == 0){
            $reponse = $bdd->query('SELECT * FROM annuaire WHERE CONCAT(nom,ville) LIKE "%'.$q.'%" ORDER BY nom ASC');
          }

        }
        $compte = $reponse->rowcount();
        echo 'Nb de résultats : '.$compte;
        // $retour = $bdd->query('SELECT COUNT(*) FROM annuaire');
        // $donnees = $retour->fetch();
        // print_r($donnees);
        
        while ($donnees = $reponse->fetch()){
       
      ?>
    
      
      <tr>
          <td id='nom'><?php echo $donnees['nom']; ?></td>
          <td id='adresse'><?php echo $donnees['adresse']; ?></td>
          <td id='cp'><?php echo $donnees['code_postal']; ?></td>
          <td id='ville'><?php echo $donnees['ville']; ?></td>
          <td id='telephone'><?php echo $donnees['telephone']; ?></td>
          <td id='mail'><?php echo $donnees['mail']; ?></td>
          <td id='categorie'><?php echo $donnees['categorie']; ?></td>
          <td class="modifs"><a id="mod" href="update.php?id=<?php echo $donnees['id']; ?> "> Modifier </a><a class="sup" href="delete.php?id=<?php echo $donnees['id']; ?>"> Supprimer </a></td>
        
      </tr>
      
      <?php
        }
      ?>
    </table>

    <?php

      // $retour = $bdd->query('SELECT COUNT(*) AS nbre_entrees FROM annuaire');
      // $donnees = $retour->fetch();
      // echo $donnees['nbre_entrees'];

    ?>
    <br>
    <a id="ajout" href="create.php">Ajouter un nouvel adhérent</a>
    
    <br>
    <br>

    
    
  </body>
</html>