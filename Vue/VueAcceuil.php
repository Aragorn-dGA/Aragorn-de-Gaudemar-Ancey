<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="Style/Bootstrap.css" />
  <title><?= $titre ?></title>   <!-- Élément spécifique -->
</head>
  
<?php $titre = 'Portfolio'; ?>

<?php ob_start();?>

<div>    
  <h2>Introduction</h2>
  <h4>
    <p>Prénom : Aragorn</p>
    <p>Nom : de Gaudemar-Ancey</p>
    <p>Age : 21 ans</p>
    <p>Formation : BTS SIO - SLAM</p>
    <p></p>
  </h4>
    
  <br/>
  <hr />
  <br/>

  <h2>Mes projets</h2><br>
  <table style="width:100%">
    <tr style="background-color: #11F;">
      <th>Titre du projet</th>
      <th>Date début du projet</th>
      <th>Compétences</th>
    </tr>

    <!--Création de ligne de table pour chaque champ du BDD-->
    <?php
    $projets = getProjets();

    if ($projets ==! null) {
      // Créer un rang pour chaque entré
      foreach ($projets as $row) :?>
        <tr href="">
          <th> <?= $row["titre"] ?> </th>
          <th> <?= $row["date"] ?> </th>
          <th> <!-- <?= $row["competences"] ?> --> </th>
        </tr>
      <?php endforeach; 
    }
    ?>
  </table>

  <h2>Mon CV</h2><br>
  <a href="Extras/20250923_CV_Aragorn.pdf" id="CV_Link">Lien vers le CV téléchargeable</a>

  <br/>
  <hr />
  <br/>
</div>

<?php $contenu = ob_get_clean(); ?>

<?php require 'Template.php'?>