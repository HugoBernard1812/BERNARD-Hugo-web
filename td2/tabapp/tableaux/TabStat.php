<?php

namespace tabapp\tableaux;
  class TabStat
  {

    public $legende;
    public $entete = [];
    public $donnees = [];
    public $total;

    public function __construct($legende, $entete1, $entete2, $entete3)
    {
        $this->entete[1] = $entete1;
        $this->entete[2] = $entete2;
        $this->entete[3] = $entete3;
        $this->legende = $legende;

    }

    /**
     * @return mixed
     */
    public function getLegende()
    {
      return $this->legende;
    }

    /**
     * @return array
     */
    public function getEntete()
    {
      return $this->entete;
    }

    /**
     * @return array
     */
    public function getDonnees()
    {
      return $this->donnees;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
      return $this->total;
    }

    /**
     * @param array $donnees
     */
    public function setDonnees($donnees)
    {
      $this->donnees = $donnees;
    }

    /**
     * @param array $entete
     */
    public function setEntete($entete)
    {
      $this->entete = $entete;
    }

    /**
     * @param mixed $legende
     */
    public function setLegende($legende)
    {
      $this->legende = $legende;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
      $this->total = $total;
    }



    public function ajoute($ligne, $int)
    {
      global $ratio;
      $donnees[] = array($ligne => $int);
      $ratio = $this->calcule();
      print_r($donnees);
      return $donnees;
    }

    public function calcule()
    {
      $ratio = 0;
      global $var;
      $donnees = $this->getDonnees();
      $total = array_sum($donnees);
      $var = count($donnees);
        foreach ($donnees as $var)
        {
          $ratio = $donnees * 100 / $total;
        }
        return $ratio;
    }



    public function genereEntete()
    {
      $leg[] = $this->getLegende();
      $ent[]= $this->getEntete();
      return '<tr>'.
      '<td colspan=3><strong>$leg</strong></td>'.
      '</tr>'.
      '<tr>'.
      '<td><strong>$ent[1]</strong></td>'.
      '<td><strong>$ent[2]</strong></td>'.
      '<td><strong>$ent[3]</strong></td>'.
      '</tr>';
    }

    protected function genereCorps()
    {
      for ($numero = 0; $numero < 10; $numero++)
      {
        $donnees[$numero] = $this->getDonnees();
        print_r($donnees);
        return $donnees;
      }
      return 0;
    }

    protected function genereFin()
    {
      return '</tbody>'.
      '</table>';
    }

    public function genere()
    {
      $this->genereEntete();
      $this->genereCorps();
      $this->genereFin();
    }

  }


?>
