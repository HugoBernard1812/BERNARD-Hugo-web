<?php
namespace etuapp\personne;


require_once 'Personne.php';
class Enseignant extends \etuapp\personne\Personne
{
    public $code_discipline, $composante, $nbbureau ;

    public function __construct($nom)
    {
        parent::__construct($nom);

    }

    public function __toString()
    {
        parent::__toString();
        return <<< Yop
        {
        "nom" : "$this->nom",
        "prenom" : "$this->prenom",
        "age" : "$this->age",
        "adresse" : "$this->adresse",
        "ville" : "$this->ville",
        "code_postal" : "$this->code_postal",
        "mail" : "$this->mail",
        "tel" : "$this->tel",
        "IdSk" : "$this->IdSk";
        "code_discipline" : "$this->code_discipline",
        "composante" : "$this->composante",
        "nbbureau" : "$this->nbbureau",
       }
Yop;
    }

    public function SommeAgeEnfants($ages)
    {
        $somme = 0;

        foreach ($ages as $age)
            $somme += $age;

        return $somme;
    }


}

?>