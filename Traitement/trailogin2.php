<?php
include "classinsc.php";
include "inscManager.php";
$personne = new Inscription([
  'mail' => $_POST['mail'],
  'mdp' => $_POST['mdp']]);
include "../app/connexionPDO.php";
$manager= new inscManager($db);
$manager->getList();
header("location: ../index.php");
 ?>
