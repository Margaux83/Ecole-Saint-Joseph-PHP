<?php
include "classinsc.php";
include "inscManager.php";
$personne = new Inscription([
  'nom' => $_POST['nom'],
  'prenom' => $_POST['prenom'],
  'mail' => $_POST['mail'],
  'mdp' => $_POST['mdp']]);
include "../app/connexionPDO.php";
$manager= new InscManager($db);
$manager->Ajouter($personne);
header("location: ../index.php");
?>
