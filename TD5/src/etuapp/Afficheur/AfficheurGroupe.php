<?php


namespace src\etuapp\Afficheur;

use src\etuapp\classe\Groupe;

require_once 'src/etuapp/classe/Groupe.php';
class AfficheurGroupe
{
    protected $classe;

    public function __construct(\src\etuapp\classe\Groupe $classe)
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