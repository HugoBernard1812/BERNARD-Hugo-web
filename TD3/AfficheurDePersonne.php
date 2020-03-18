<?php

namespace etuapp\Afficheur;


use etuapp\personne\Personne;

require_once 'Personne.php';
class AfficheurDePersonne
{
    public $p;

    public function __construct(Personne $p)
    {
        $this->p = $p;
    }



    public function vueCourte()
    {
        return '<div>' .
            '<p>' .
            $this->p->nom .
            ' ' .
            $this->p->prenom .
            ', habite à ' .
            $this->p->ville .
            '</p>' .
            '</div>';
    }

    public function vueDetail()
    {
        return '<div>'.
            '<p>' .
            $this->p->nom .
            ' ' .
            $this->p->prenom .
            ', habite à ' .
            $this->p->ville .
            ' ' .
            $this->p->adresse .
            ' ' .
            $this->p->age .
            ' ' .
            $this->p->codepostal .
            ' ' .
            $this->p->mail .
            ' ' .
            $this->p->tel .
            ' ' .
            $this->p->IdSk .
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