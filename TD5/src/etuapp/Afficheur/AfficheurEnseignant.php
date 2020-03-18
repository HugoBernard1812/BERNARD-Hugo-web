<?php
namespace etuapp\Afficheur;

use etuapp\personne\Enseignant;


class AfficheurEnseignant extends \etuapp\Afficheur\AfficheurDePersonne
{
    public $code_discipline;
    public $composante;
    public $nbbureau;


    public function __construct(Enseignant $p)
    {
        parent::__construct($p);
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
            ' ' .
            $this->p->code_discipline .
            '</p>' .
            '</div>';
    }

    public function vueDetail()
    {
        $html = '<div>' .
            ' '.
            $this->p->nom .
            ' '.
            $this->p->prenom .
            ' '.
            $this->p->age.
            'ans '.
            ' '.
            $this->p->adresse.
            ' '.
            $this->p->code_postal.
            ' '.
            $this->p->ville.
            ' ' .
            $this->p->mail .''.
            ' ' .
            $this->p->tel .
            ' '.
            $this->p->IdSk .
            ' '.
            $this->p->code_discipline .
            ' ' .
            $this->p->composante .
            ' ' .
            $this->p->nbbureau .
            '</p>' .
            '</div>';

        return $html;
    }

}

?>