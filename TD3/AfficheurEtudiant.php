<?php
namespace etuapp\Afficheur;
use etuapp\personne\Personne;

require_once 'Personne.php';
require_once 'Etudiant.php';

class AfficheurEtudiant extends \etuapp\Afficheur\AfficheurDePersonne
{
    public $nbetudiant;


    public function __construct(Personne $p)
    {
        parent::__construct($p);
    }


    public function vueCourte()
    {
        return '<div>' .
            '<p>' .
            parent::vueCourte().
            $this->p->nbetudiant .
            '</p>' .
            '</div>';
    }

    public function vueDetail()
    {
        return '<div>' .
            '<p>' .
            parent::vueDetail().
            ' ' .
            $this->p->nbetudiant .
            ' ' .
            $this->p->formation .
            ' ' .
            $this->p->groupe .
            '</p>' .
            '</div>';
    }


    public function afficher($sel)
    {
        $content = null;

        switch ($sel) {
            case 'short' :
            {
                $content = $this->vueCourte();
                break;
            }
            case 'long' :
            {
                $content = $this->vueDetail();
                break;
            }

        }
    }
}

?>