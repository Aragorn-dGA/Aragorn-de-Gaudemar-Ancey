<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="Style/Bootstrap.css" />
    <title><?= $titre ?></title>   <!-- Élément spécifique -->
  </head>
  <body>
    <div id="global">
      <header>
        <a href="index.php"><h1 id="titreBlog">Aragorn de Gaudemar-Ancey</h1></a>
      </header>
      <div id="contenu">
        <?= $contenu ?>   <!-- Élément spécifique -->
      </div>
      <footer id="piedBlog">
        <p>Adresse : 1 bis chemin du Devais</p><!-- adresses -->
        <p>Numéro tel :</p><!-- numéro tel -->
        <p>adresse mail : degaudemarara@gmail.com</p><!-- adresse mail -->
      </footer>
    </div> <!-- #global -->
  </body>
</html>