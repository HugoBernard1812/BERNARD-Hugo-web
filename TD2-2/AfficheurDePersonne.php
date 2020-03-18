<?php


class AfficheurDePersonne
{
    public $perso;

    public function __construct(Personnes $p1)
    {
        $this->perso = $p1;
    }

    public function vueCourte()
    {
        $p1 = new Personnes('Phil');
        $p1->prenom = 'Jean';
        $p1->adresse = '45 rue zert';
        $p1->ville = 'NANCY';
        echo "<div>$p1</div>";
    }

    public function vueDetail()
    {
        $p1 = new Personnes('Phil');
        $p1->age = 48;
        $p1->prenom = 'Jean';
        $p1->adresse = '45 rue zert';
        $p1->ville = 'NANCY';
        $p1->code_postal = '54000';
        $p1->mail = 'Jean.Phil@gmail.com';
        $p1->tel = '03.83.00.00.01';
        $p1->IdSk = 'JeanPhil';
        echo "<div>$p1</div>";
    }
}

?>