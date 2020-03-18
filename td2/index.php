<?php

require_once 'vendor/autoload.php';

require_once 'tabapp\tableaux\TabStatTrie.php';
require_once 'tabapp\tableaux\TabStat.php';
require_once 'tabapp\divers\Outils.php';

use \tabapp\tableaux\TabStat;
use \tabapp\tableaux\TabStatTrie;
use \tabapp\divers\Outils;



$this->headerHTML("Exemple de tableaux statistiques");

$monTab = new TabStat ("Part de marché des navigateurs en décembre 2004",
                       "Produit", "Nombre de personnes", "Pourcentage");

$monTab->ajoute("Autres", 28000);
$monTab->ajoute("Microsoft Internet Explorer", 1732000);
$monTab->ajoute("Mozilla / Firefox",186000 );
$monTab->ajoute("Netscape", 20000);
$monTab->ajoute("Opera", 6800);
$monTab->ajoute("Safari", 28000);

$monTab->genere();

$monTab2 = new TabStat ("Part de marché des navigateurs en Décembre 2004",
    "Produit", "Nombre de personnes", "Pourcentage");

$monTab2->ajoute("Autres", 28000);
$monTab2->ajoute("Microsoft Internet Explorer", 1732000);
$monTab2->ajoute("Mozilla / Firefox",186000 );
$monTab2->ajoute("Netscape", 20000);
$monTab2->ajoute("Opera", 6800);
$monTab2->ajoute("Safari", 28000);

$this->trie($monTab2);
$monTab2->genere();

$this->footerHTML();

?>
