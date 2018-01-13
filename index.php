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
      <div>
        Recherche par
        <select name="choix">
            <option value="nom">Nom</option>
            <option value="ville">Ville</option>
            <option value="categorie">Catégorie</option>
            <option value="commentaire">Commentaire</option>
            <option value="tout">Tout</option>
        </select>
      </div>
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
          <th>Commentaire</th>
          <th>Modifier</th>
      </tr>

      <!-- Afficher la liste des contacts -->
      <?php
        require 'process/connect.php';
        $reponse = $bdd->query('SELECT * FROM annuaire ORDER BY nom ASC');

        if(isset($_GET['q']) AND !empty($_GET['q'])){
          $q = htmlspecialchars($_GET['q']);
          $c = $_GET['choix'];

          
          switch ($c) {
            case 'nom':
              $reponse = $bdd->query('SELECT * FROM annuaire WHERE nom LIKE "%'.$q.'%" ORDER BY nom ASC');
              break;
            case 'ville':
              $reponse = $bdd->query('SELECT * FROM annuaire WHERE ville LIKE "%'.$q.'%" ORDER BY ville ASC');
              break;
            case 'categorie':
              $reponse = $bdd->query('SELECT * FROM annuaire WHERE categorie LIKE "%'.$q.'%" ORDER BY categorie ASC');
              break;
              case 'commentaire':
              $reponse = $bdd->query('SELECT * FROM annuaire WHERE commentaire LIKE "%'.$q.'%" ORDER BY commentaire ASC');
              break;
            default:
               $reponse = $bdd->query('SELECT * FROM annuaire WHERE nom LIKE "%'.$q.'%" OR ville LIKE "%'.$q.'%" OR categorie LIKE "%'.$q.'%" ORDER BY nom ASC');
              break;
          }
        }

        $compte = $reponse->rowcount();
        echo 'Nb de résultats : '.$compte;
        
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
          <td id='categorie'><?php echo $donnees['commentaire']; ?></td>
          <td class="modifs"><a id="mod" href="pages/update.php?id=<?php echo $donnees['id']; ?> "> Modifier </a><a class="sup" href="pages/delete.php?id=<?php echo $donnees['id']; ?>"> Supprimer </a></td>      
      </tr>
      
      <?php
        }
      ?>
    </table>

    <br>

    <a id="ajout" href="pages/create.php">Ajouter un nouvel adhérent</a>
    
    <br>
    <br>  
    
  </body>
</html>