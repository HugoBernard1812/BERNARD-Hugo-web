<?php
namespace etuapp\personne;


require_once 'Personne.php';
class Enseignant extends \etuapp\personne\Personne
{
    protected $code_discipline, $composante, $nbbureau ;

    public function __construct($nom)
    {
        parent::__construct($nom);

    }

    public function __toString()
    {
        parent::__toString();
        return <<< Yop
        {
        "code_discipline" : "$this->code_discipline->",
        "composante" : "$this->composante",
        "nbbureau" : "$this->nbbureau",
       }
Yop;
    }

    public function __get($at)
    {
        if (property_exists($this, $at)) {
            return $this->$at ;
        } else throw new \Exception ("$at : invalid property");
    }

    public function __set($at, $val)
    {
        if (property_exists($this, $at)) {
            $this->$at = $val;
            return $this->$at;
        } else throw new \Exception ("$at : invalid property");
    }
}

?>