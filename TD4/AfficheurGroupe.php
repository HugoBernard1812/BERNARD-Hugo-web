<?php


namespace etuapp\Afficheur;

use \etuapp\classe\Classe;
class AfficheurGroupe
{
    protected $classe;

    public function __construct(Classe $classe)
    {
        $this->classe = $classe;
    }

    public function afficher($matiere = 'php', $tri = 'note')
    {
        $moyenneMatiere = $this->classe->moyenneMatiere($matiere);
        $moyenneTotal = print_r($this->classe->moyennesEtudiants($tri), true);

        echo $moyenneMatiere;
        echo $moyenneTotal;
    }
}

?>