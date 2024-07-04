<?php

declare(strict_types=1);

$titre = 'Exemple';

$html = <<<HTML
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>{$titre}</title>
    <style>
        table {
            border: black 1px solid;
        }
        tr {
            border: red 1px solid;
        }
        td {
            border: blue 1px solid;
        }
    </style>
  </head>
  <body>
    <h1>{$titre}</h1>
    <table>
    
    <!-- Ajoutez plus de variables si nécessaire -->


HTML;


for ($i=0; $i<=10; $i++) {
    //
    $result= $i*12;
    $html .= "<tr>
                <td> $i x 12 </td>
                <td> = </td>
                <td> $result </td>
              </tr>";

}
//affiche via la variable HTML la multiplication puis le resultat

$html .= <<<HTML
    
  </body>
</html>
HTML;

// Une réponse HTTP est produite, son corps (la charge utile) contient ce qui est produit par echo
echo $html;


