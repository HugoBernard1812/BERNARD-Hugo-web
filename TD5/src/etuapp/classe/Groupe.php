<?php


namespace etuapp\classe;

require_once 'Personne.php';
require_once 'Etudiant.php';

class Classe
{
    protected $num;
    protected $semestre;
    protected $nom;
    protected $formation;

    protected $liste_etudiants = [];

    public function __construct($num, $semestre)
    {
        $this->num = $num;
        $this->semestre = $semestre;
    }

    public function ajouterEtudiant(\etuapp\personne\Etudiant $etu)
    {
        if (!isset($this->liste_etudiants[$etu->nbetudiant])) {
            $this->liste_etudiants[$etu->nbetudiant] = $etu;
        }
    }

    public function moyenneMatiere($matiere)
    {
        if (count($this->liste_etudiants) == 0) {
            return -1;
        }

        $moyenne = $i = 0;
        foreach ($this->liste_etudiants as $etudiant) {
            $moyenneEtu = $etudiant->MoyenneEtu($matiere);

            if ($moyenneEtu > -1) {
                $moyenne += $moyenneEtu;
                $i++;
            }
        }

        if ($i == 0) {
            return -1;
        }

        return $moyenne / $i;
    }

    public function moyennesEtudiants($tri = 'moyenne')
    {
        $l_Etudiants = [];

        foreach ($this->liste_etudiants as $etudiant) {
            $moyennes = $etudiant->toutesMoyennes();

            $l_Etudiants[$etudiant->nom] = $moyennes['generale'];
        }

        switch ($tri) {
            default:
            case 'moyenne':
                asort($l_Etudiants);
                break;
            case 'nom':
                ksort($l_Etudiants);
                break;
        }

        return $l_Etudiants;
    }
}

?>