<?php
$historique_commandes = array(5.49, 9.99, 5.49, 15.99, 25);

function afficher_commandes($historique_commandes)
{
    for ($numero = 0; $numero < 5; $numero++) {
        echo "Une commande ";
        echo $historique_commandes[$numero];
        echo " euros a été reçus. <br>";
    }
    echo "Le total des commandes est de ";
    echo array_sum($historique_commandes);
    echo " euros.";
}

afficher_commandes($historique_commandes);
