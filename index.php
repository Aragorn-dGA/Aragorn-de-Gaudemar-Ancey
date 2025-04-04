<?php

require('Controleur/Controleur.php');

try {
    if (isset($_GET['action'])) {
      if ($_GET['action'] == 'projet') {
        if (isset($_GET['id'])) {
          $idProjet = intval($_GET['id']);
          if ($idProjet != 0)
            projet($idProjet);
          else
            throw new Exception("Identifiant de projet non valide");
        }
        else
          throw new Exception("Identifiant de projet non défini");
      }
      else
        throw new Exception("Action non valide");
    }
    else {
      accueil();  // action par défaut
    }
  }
  catch (Exception $e) {
      erreur($e->getMessage());
  }