<?php
// Déclaration de nos trois variables
$texte = "training day aujourd'hui!";
$entier = 7;
$booleen = true;

// Affichage de nos valeurs
echo $texte . "\n";
echo $entier . "\n";
echo ($booleen ? "true" : "false") . "\n";

// Une boucle qui affiche les nombres pairs entre 1 et 20
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . "\n";
}
?>
