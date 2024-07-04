<?php

declare(strict_types=1);

$titre = 'Résultat'; //créer variable qui contient un mot qui sera appeler et afficher plus loin
//évite de modifier chaque affichage

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
    
    
    
    <!-- Ajoutez plus de variables si nécessaire -->


HTML;
if(isset($_GET['nombre'])) {
    // Récupère le nombre depuis l'URL
    $nombre = $_GET['nombre']; //récupère le nombre que l'utilisateur donnera sur la page HTML

    // Affiche la table de multiplication pour le nombre donné
    echo "<h2>Table de multiplication pour $nombre :</h2>";
    $html .= "<table border='1'>"; //on lui dit d'ajouter une sauce derrière le html

            for ($i=0; $i<=10; $i++) {
                //
                $result= $i*$nombre;
                $html .= "<tr> <!-- on lui rajoute une 2e sauve derrière le html, qui donne une ligne avec des colonnes -->
                <td> $i x $nombre </td> <!-- une colonne i multiplier par le nombre de l'utilisateur -->
                <td> = </td> <!-- une colonne = -->
                <td> $result </td><!-- une colonne reusltat -->
              </tr>"; //chaque contenu de colonne est aligné et on répète jusqu'à 10

}
//affiche via la variable HTML la multiplication puis le resultat
    $html .= "</table>"; //on ajoute la sauce fermer la table

            echo "$html"; //maintenant qu'il y a toutes les sauces on affiche la variable html
} else {
    // Si le paramètre 'nombre' n'est pas spécifié, affiche un message d'erreur
    echo "<p>Aucun nombre spécifié.</p>";
}

$html .= <<<HTML
    
  </body> <!-- on ferme le HTML -->
</html>

HTML
?>





