<?php

namespace etuapp\personne;


class Personne
{
    public $nom, $prenom, $age, $adresse, $ville, $code_postal, $mail, $tel, $IdSk;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function __get($at)
    {
        if ( property_exists ($this, $at) )
        {
            return $this->$at;
        }  else throw new \Exception ("$at: invalid property");
    }

    public function __set($at, $val)
    {
        if (property_exists($this, $at)) {
            $this->$at = $val;
            return $this->$at;
        } else throw new \Exception ("$at : invalid property");
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