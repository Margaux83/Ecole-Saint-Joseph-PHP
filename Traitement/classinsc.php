<?php
class Inscription
{
  private $_nom;
  private $_prenom;
  private $_mail;
  private $_mdp;

public function __construct(array $donnees)
{
  $this->hydrate($donnees);
}

  // Un tableau de données doit être passé à la fonction (d'où le préfixe « array »).
  public function hydrate(array $donnees)
  {
    foreach ($donnees as $key => $value)
    {
      // On récupère le nom du setter correspondant à l'attribut.
      $method = 'set'.ucfirst($key);

      // Si le setter correspondant existe.
      if (method_exists($this, $method))
      {
        // On appelle le setter.
        $this->$method($value);
      }
    }
  }

  public function nom() { return $this->_nom; }
  public function prenom() { return $this->_prenom; }
  public function mail() { return $this->_mail; }
  public function mdp() { return $this->_mdp; }

  public function setNom($nom)
  {
    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    // Dont la longueur est inférieure à 30 caractères.
    if (is_string($nom) && strlen($nom) <= 30)
    {
      $this->_nom = $nom;
    }
  }

  public function setPrenom($prenom)
  {
    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    // Dont la longueur est inférieure à 30 caractères.
    if (is_string($prenom) && strlen($prenom) <= 30)
    {
      $this->_prenom = $prenom;
    }
  }
  public function setMail($mail)
  {
    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    // Dont la longueur est inférieure à 30 caractères.
    if (is_string($mail) && strlen($mail) <= 30)
    {
      $this->_mail = $mail;
    }
  }

  public function setMdp($mdp)
  {
    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    // Dont la longueur est inférieure à 30 caractères.
    if (is_string($mdp) && strlen($mdp) <= 30)
    {
      $this->_mdp = $mdp;
    }
  }
}
?>
