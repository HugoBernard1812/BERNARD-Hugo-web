<?php
namespace etuapp\Afficheur;
use etuapp\personne\Personne;

require_once 'Personne.php';
require_once 'Enseignant.php';

class AfficheurEnseignant extends \etuapp\Afficheur\AfficheurDePersonne
{
    public $code_discipline;


    public function __construct(Personne $p)
    {
        parent::__construct($p);

    }


    public function vueCourte()
    {
        return '<div>' .
            '<p>' .
            parent::vueCourte().
            $this->p->code_discipline .
            '</p>' .
            '</div>';
    }

    public function vueDetail()
    {
        return '<div>'.
            '<p>'.
            parent::vueDetail().
            ' ' .
            $this->p->code_discipline .
            ' ' .
            $this->p->composante .
            ' ' .
            $this->p->nbbureau .
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