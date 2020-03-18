<?php

namespace tabapp\tableaux;

require 'tabapp\tableaux\TabStat.php';

  class TabStatTrie extends TabStat
  {

    public function __construct($legende, $entete1, $entete2, $entete3)
    {
        parent::__construct($legende, $entete1, $entete2, $entete3);
    }

    private function trie($donnees)
    {

         $donnees[] = parent::getDonnees();
         rsort($donnees);
         foreach ($donnees as $key => $value) {
         echo "$key = $value\n";
         }
        
    }

       public function genere()
       {
         parent::genere();
       }

  }

?>
