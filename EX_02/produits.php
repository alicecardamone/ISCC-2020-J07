
<?php
$produits = array(
    'T-shirt rouge  ' => 15.50,
    'T-short vert  ' => 15.50,
    'T-shirt argent  ' => 16.50,
    'Short bleu  ' => 19.99,
    'Short vert  ' => 19.99,
    'Veste argent  ' => 35
);


function afficher_produits($produits)
{
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Produits</th>";
    echo "<th>Prix</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    foreach ($produits as $cle => $elements) {
        echo "<tr>";
        echo    '<td> ' . $cle . '</td>';
        echo    '<td>' . $elements . '</td>';
        echo "</tr>";
    };

    echo "</tbody>";
    echo "</table>";
}

afficher_produits($produits);
