<?php

require 'Modele/Modele.php';

function accueil() {
  require 'Vue/VueAcceuil.php';
}

function projet($idProjet) {
  $projet = getProjet($idProjet);
  require 'Vue/VueProjet.php';
}

// Affiche une erreur
function erreur($msgErreur) {
  require 'Vue/VueErreur.php';
}
