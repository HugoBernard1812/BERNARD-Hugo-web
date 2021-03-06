<?php
namespace etuapp\Afficheur;
use etuapp\personne\Personne;

require_once 'Personne.php';
require_once 'Etudiant.php';

class AfficheurEtudiant extends \etuapp\Afficheur\AfficheurDePersonne
{
    public $nbetudiant;
    public $formation;
    public $groupe;


    public function __construct(Personne $p)
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
            $this->p->nbetudiant .
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
            'Informations étudiant :<br>'.
            '<ul>'.
            '<li>'.
            $this->p->nbetudiant.
            '</li>'.
            '<li>'.
            $this->p->formation.
            '</li>'.
            '<li>'.
            $this->p->groupe.
            '</li>'.
            '<p>' ;

            return $html;


        /*return '<div>'.
            '<p>'.
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
            ' ' .
            $this->p->code_discipline .
            ' ' .
            $this->p->composante .
            ' ' .
            $this->p->nbbureau .
            '</p>' .
            '</div>'; */

    }

}

?>