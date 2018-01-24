<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Annuaire</title>
    <link rel="stylesheet" type="text/css" href="inc/CSS/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>

  <body>
    <h1>Annuaire du Phare</h1>

    <form class="cherche" method="GET">
    	
      		<input type="search" placeholder="Entrez votre recherche ici" name="q"/>
        	
	        <select name="choix">
	            <option value="nom">Recherche par nom</option>
	            <option value="ville">Recherche par ville</option>
	            <option value="categorie">Recherche par catégorie</option>
	            <option value="commentaire">Recherche par commentaire</option>
	            <option value="tout">Recherche globale</option>
	        </select>
          
          <input id="btn" type="submit" value="Va chercher !" name="">
       
    </form>
    
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
   
      ?>
      
      <div class="cherche2">
        
        <?php
          $compte = $reponse->rowcount();
          echo 'Nb de résultats : <span>'.$compte.'</span>';

          while ($donnees = $reponse->fetch()){
        ?>

      </div>
       
      <tr>
          <td id='nom'><?php echo $donnees['nom']; ?></td>
          <td id='adresse'><?php echo $donnees['adresse']; ?></td>
          <td id='cp'><?php echo $donnees['code_postal']; ?></td>
          <td id='ville'><?php echo $donnees['ville']; ?></td>
          <td id='telephone'><?php echo $donnees['telephone']; ?></td>
          <td id='mail'><?php echo $donnees['mail']; ?></td>
          <td id='categorie'><?php echo $donnees['categorie']; ?></td>
          <td id='commentire'><?php echo $donnees['commentaire']; ?></td>
          <td class="modifs"><a id="mod" href="pages/update.php?id=<?php echo $donnees['id']; ?> "> <img src="inc/img/modify.png"> </a><a class="sup" href="pages/delete.php?id=<?php echo $donnees['id']; ?>" onclick="Supp(this.href); return(false);"> <img src="inc/img/delete.png"> </a></td>      
      </tr>
      
      <?php
        }
      ?>
    </table>

    <br>

    <div class="ajout">
      <a id="ajout" href="pages/create.php">Ajouter un nouveau contact</a>
    </div>
    
    <br>
    <br>  
    
    <script type="text/javascript">
            function Supp(link){
                if(confirm('Confirmer la suppression ?')){
                    document.location.href = link;
                }
            }
        </script>

  </body>
</html>