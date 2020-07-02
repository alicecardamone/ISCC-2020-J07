<?php

$panier = array(
    ["T-shirt rouge", 15.50, 5],
    ["T-shirt vert", 15.50, 6],
    ["T-shirt argent", 15.50, 8],
    ["Short bleu", 16.50, 5],
    ["Short vert", 19.99, 5],
    ["Short argent", 19.99, 10],
    ["Veste argent", 35, 3]
);

function afficher_panier($panier)
{
    foreach ($panier as $produits) {
        echo "<ul>";
        foreach ($produits as $elements) {
            echo "<li>" . $elements . "</li>";
        }
        echo "</ul>";
    }
}


afficher_panier($panier);

function calculer_total_panier($panier)
{
    $totalpanier = 0;
    foreach ($panier as $elements) {
        $totalpanier = $totalpanier + $elements[1];
    };
    return  $totalpanier;
}

echo '<p> Le prix total du panier est ' . calculer_total_panier($panier) . '</p>';
