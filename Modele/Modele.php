<?php

// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd() {
  $bdd = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8',
  'Alan', 'P4ssw@rd', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

  return $bdd;
}
  
function getProjet($idProjet) {
  $bdd = getBdd();
  
  $projet = $bdd->prepare("SELECT id_projet as id, titre as titre, date_debut as date,
          commentaires as contenu from p_projet  where id_projet=?");

  $projet->execute(array($idProjet));

  if ($projet->rowCount() == 1)
    return $projet->fetch();  // Accès à la première ligne de résultat
  else
    throw new Exception("Aucun projet ne correspond à l'identifiant '$idProjet'");
}

function getProjets() {
  $bdd = getBdd();
  $projets = $bdd->query("SELECT id_projet as id, titre as titre, date_debut as date,
          commentaires as contenu from p_projet");
          
  return $projets->fetchAll(PDO::FETCH_ASSOC); // Fetch all results as an associative array
}

