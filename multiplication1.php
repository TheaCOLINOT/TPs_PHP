<?php

declare(strict_types=1);

$titre = 'Exemple';

$html = <<<HTML
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>{$titre}</title>
  </head>
  <body>
    <h1>{$titre}</h1>

HTML;

for ($i=0; $i<=10; $i++) {
    //
    $result= $i*12;
    $html .= "<div> $i x 12 = $result </div>\n";
}
   //affiche via la variable HTML la multiplication puis le resultat

$html .= <<<HTML
    <!--  -->
  </body>
</html>
HTML;

// Une réponse HTTP est produite, son corps (la charge utile) contient ce qui est produit par echo
echo $html;

