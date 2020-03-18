<?php
namespace etuapp\personne;

class Etudiant extends Personne
{
    public $nbetudiant, $formation, $groupe, $matiere = [] ;

    public function __construct($nom)
    {
        parent::__construct($nom);

    }

    public function __toString()
    {
        parent::__toString();
        return <<< Yop
        {
        "nom" : "$this->nom",
        "prenom" : "$this->prenom",
        "age" : "$this->age",
        "adresse" : "$this->adresse",
        "ville" : "$this->ville",
        "code_postal" : "$this->code_postal",
        "mail" : "$this->mail",
        "tel" : "$this->tel",
        "IdSk" : "$this->IdSk";
        "nbetudiant" : "$this->nbetudiant",
        "formation" : "$this->formation",
        "groupe" : "$this->groupe",
       }
Yop;
    }

    public function AfficheJour($jour)
    {
        $jours = [
           1 => 'lundi',
           2 => 'mardi',
           3 => 'mercredi',
           4 => 'jeudi',
           5 => 'vendredi',
           6 => 'samedi',
           7 => 'dimanche',
        ];
        if (isset($jours[$jour]))
            return $jours[$jour];
         $array = array_search($jour, $jours);
         if ($array != false)
         return $array;

        // foreach ($jours as $no => $n)
        // if ($n === $jour)
        //   return ($n);

    }

    public function AjouterNote ($mat, $note)
    {
        if (!isset($this->matiere[$mat])) {
            $this->matiere[$mat] = [];
        }

        $this->matiere[$mat][] = $note;
    }

    public function MoyenneEtu ($mat)
    {
        if (!isset($this->matiere[$mat])) {
            return -1;
        }

        $moyenne = array_sum($this->matiere[$mat]) / count($this->matiere[$mat]);

        echo "$moyenne<p>";
        return $moyenne;

    }

    public function AjouterPlusieursNotes($mat, $pl_note)
    {
        foreach (explode(' ', $pl_note) as $pl_note) {
            $this->AjouterNote($mat, $pl_note);
            echo "$pl_note<p>";
        }
    }

    public function toutesMoyennes()
    {
        $MoyennesMatieres = [
            'matiere' => [],
            'moyenne generale' => 0,
        ];

        if (count($this->matiere) == 0) {
            return $MoyennesMatieres;
        }

        $somme = 0;
        $i = 0;
        foreach ($this->matiere as $mat => $note) {
            $MoyennesMatieres['matiere'][$mat] = $this->MoyenneEtu($mat);
            $somme += $MoyennesMatieres['matiere'][$mat];
            $i++;
        }

        $MoyennesMatieres['moyenne generale'] = $somme / $i;
        return $MoyennesMatieres;
    }

    public function modifierNote($mat, $pos, $note)
    {
        if (isset($this->matiere[$mat][$pos])) {
            $this->matiere[$mat][$pos] = $note;
            echo $this->matiere[$mat][$pos];
        }
    }

}

?>