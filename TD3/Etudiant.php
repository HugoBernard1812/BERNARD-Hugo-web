<?php
namespace etuapp\personne;
require_once 'Personne.php';
class Etudiant extends \etuapp\personne\Personne
{
    public $nbetudiant, $formation, $groupe ;

    public function __construct($nom, $nbetudiant, $formation, $groupe)
    {
        parent::__construct($nom);

    }

    public function __toString()
    {
        parent::__toString();
        return <<< Yop
        {
        "nbetudiant" : "$this->nbetudiant",
        "formation" : "$this->formation",
        "groupe" : "$this->groupe",
       }
Yop;
    }

    public function __get($nom)
    {
        if (property_exists($this, $nom)) {
            return $this->$nom;
        } else throw new \Exception ("$nom : invalid property");
    }

    public function __set($nom, $val)
    {
        if (property_exists($this, $nom)) {
            $this->$nom = $val;
            return $this->$nom;
        } else throw new \Exception ("$nom : invalid property");
    }
}

?>