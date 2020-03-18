<?php


require_once 'src/etuapp/personne/Etudiant.php';
require_once 'src/etuapp/personne/Enseignant.php';
require_once 'src/etuapp/personne/Personne.php';

require_once 'src/etuapp/classe/Groupe.php';

 require_once 'src/etuapp/Afficheur/AfficheurDePersonne.php';
 require_once 'src/etuapp/Afficheur/AfficheurEtudiant.php';
require_once 'src/etuapp/Afficheur/AfficheurEnseignant.php';
 require_once 'src/etuapp/Afficheur/AfficheurGroupe.php';

use \etuapp\personne\Etudiant;

use \etuapp\classe\Classe;

use \etuapp\Afficheur\AfficheurDePersonne;


$p1 = new \etuapp\personne\Personne('Phil');
$p1->age = 48;
$p1->prenom = 'Jean';
$p1->adresse = '45 rue zert';
$p1->ville = 'NANCY';
$p1->code_postal = '54000';
$p1->mail = 'Jean.Phil@gmail.com';
$p1->tel = '03.83.00.00.01';
$p1->IdSk = 'JeanPhil';
echo "$p1<p>";


$p2 = new \etuapp\personne\Personne('Hegg');
$p2->age = 44;
$p2->prenom = 'Max';
$p2->adresse = '33 rue pouz';
$p2->ville = 'NANCY';
$p2->code_postal = '54000';
$p2->mail = 'Max.Hegg@gmail.com';
$p2->tel = '03.83.00.00.02';
$p2->IdSk = 'MaxHegg';
echo "$p2<p>";

// Créer un enseignant :
$ens1 = new \etuapp\personne\Enseignant( 'Richards' ) ;
$ens1->age = 44;
$ens1->prenom = 'Hert';
$ens1->adresse = '35 rue pouz';
$ens1->ville = 'NANCY';
$ens1->code_postal = '54000';
$ens1->mail = 'Richards.Hert@gmail.com';
$ens1->tel = '03.83.00.00.03';
$ens1->IdSk = 'RichardsHert';
$ens1->code_discipline = 'ens1';
$ens1->composante = 'Informatique';
$ens1->nbbureau = '405';


// Créer un afficheur
$aff1 = new \etuapp\Afficheur\AfficheurEnseignant($ens1) ;
echo "$ens1<p>";
echo $ens1 -> SommeAgeEnfants([12, 5, 17]);

// Créer un étudiant :
$etu1 = new \etuapp\personne\Etudiant( 'Kevin' ) ;
$etu1->age = 22;
$etu1->prenom = 'Baste';
$etu1->adresse = '37 rue azert';
$etu1->ville = 'NANCY';
$etu1->code_postal = '54000';
$etu1->mail = 'Kevin.Baste@gmail.com';
$etu1->tel = '03.83.00.00.04';
$etu1->IdSk = 'KevinBaste';
$etu1->nbetudiant = 'etu1';
$etu1->formation = 'DUT INFO';
$etu1->groupe = 'AS';
echo "<p>$etu1";

echo "<p>";
echo $etu1 -> AfficheJour(3);
echo "<p>";
echo $etu1 -> AfficheJour ('jeudi');
echo "<p>";
echo $etu1 -> AjouterNote('Informatique',9);
echo "<p>";
echo $etu1 -> MoyenneEtu('Informatique');
echo "<p>";
echo $etu1 -> AjouterPlusieursNotes( 'Maths', '6 7 8 9');
echo "<p>";
echo $etu1 -> modifierNote('Maths', 1, 8);
echo "<p>";




// Créer un afficheur
$aff2 = new \etuapp\Afficheur\AfficheurEtudiant($etu1) ;
$aff2->afficher("Courte");
$aff1->afficher("Courte");
$aff2->afficher("Detail");
$aff1->afficher("Detail");

$etu2 = new \etuapp\personne\Etudiant( 'Mac' ) ;
$etu2->age = 21;
$etu2->prenom = 'Baster';
$etu2->adresse = '39 rue pouz';
$etu2->ville = 'METZ';
$etu2->code_postal = '54000';
$etu2->mail = 'Kevin.Baste@gmail.com';
$etu2->tel = '03.83.00.00.04';
$etu2->IdSk = 'MacBaster';
$etu2->nbetudiant = 'etu1';
$etu2->formation = 'DUT INFO';
$etu2->groupe = 'AS';

$aff3 = new \etuapp\Afficheur\AfficheurEtudiant($etu2) ;
$aff3->afficher("Detail");



