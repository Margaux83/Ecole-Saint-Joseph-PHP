<?php
class InscManager{
private $_db;
public function __construct($db)
{
  $this->setDb($db);
}
public function setDb(PDO $db)
{
  $this->_db=$db;
}

public function Ajouter(Inscription $personne){
  $requete = $this->_db->prepare('INSERT INTO inscription (Nom, Prenom, Mail, MDP)  VALUES (:nom,:prenom,:mail,:mdp)');
$requete->execute(array(
 'nom'=>$personne->nom(),
 'prenom'=>$personne->prenom(),
 'mail'=>$personne->mail(),
 'mdp'=>$personne->mdp()));

}
public function getList()
  {

    $requete = $this->_db->prepare("SELECT * FROM inscription WHERE Mail=:mail");
  $requete->execute(array('mail'=>$_POST['mail']));
  $donnee=$requete->fetch();
  if($donnee)
  {
    if($_POST['mail'] == 'admin@admin.com' && $_POST['mdp'] == 'admin')
        {
                setcookie('admin', $donnee['Nom'], time()+3600, '/');
              header('location: ../index.php');
        }
    elseif($_POST['mail']==$donnee['Mail'] && $_POST['mdp']==$donnee['MDP'])
    {
      //On vérifie que l'adresse email et le mot de passe existent dans la base de donnée
    setcookie('nom', $donnee['Nom'], time()+3600, '/');
      setcookie('prenom', $donnee['Prenom'], time()+3600, '/');
    session_start(); //On ouvre la session de l'utilisateur
    $_SESSION['prenom'] = $donnee['Prenom'];
    $_SESSION['nom'] = $donnee['Nom'];
    header('location: ../index.php');
  }
  }
}
}
?>
