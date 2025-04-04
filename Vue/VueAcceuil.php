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

  <h2>Mon CV</h2><br>
  <a href="Extras/20250923_CV_Aragorn.pdf" id="CV_Link">Lien vers le CV téléchargeable</a>

  <br/>
  <hr />
  <br/>
</div>

<?php $contenu = ob_get_clean(); ?>

<?php require 'Template.php'?>