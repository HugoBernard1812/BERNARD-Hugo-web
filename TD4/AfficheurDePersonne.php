<?php

namespace etuapp\Afficheur;


use etuapp\personne\Personne;

require_once 'Personne.php';
abstract class AfficheurDePersonne
{
    public $p;

    public function __construct(Personne $p)
    {
        $this->p = $p;
    }


    public abstract function vueCourte();

    public abstract function vueDetail();


    public function afficher($sel)
    {
        /*if ($sel == "Courte")
            echo $this -> vueCourte();
        else if ($sel == "Detail")
            echo $this -> vueDetail();
        else echo "erreur"; */

        switch ($sel) {
            case 'Courte': {
                echo $this->vueCourte();
                break;
            }
            case 'Detail': {
                echo $this->vueDetail();
                break;
            }
        }
    }
}

?>