<?php


class Personnes
{
    public $nom, $prenom, $age, $adresse, $ville, $code_postal, $mail, $tel, $IdSk;

    public function __construct($nom)
    {
        $this->nom=$nom;
    }

    public function __toString()
    {
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
       }
Yop;
    }
}

?>