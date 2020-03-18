<?php

namespace tabapp\divers;
class Outils {

  public function headerHTML($titre)
  {
     return '<!DOCTYPE html>'.
    '<html lang ="fr">'.
    '<head>'.
      '<meta charset="utf-8"/>'.
      '<title>'.$titre.'/title>'.
      '<link rel="stylesheet" href="Outils.css">'.
    '</head>'.
    '<body>';
  }

  public function footerHTML()
  {
    $html = '</body>'.
    '</html>';

    return $html;
  }

}

?>
