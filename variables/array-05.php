<?php

$tableau = [];

$tableau[] = 123;
$tableau[] = 3.14;
$tableau[] = 'foo br baz';
$tableau[] = true;

$index = 0;
// affichage d'un élément du tableau en utilisant une variable comme index
echo $tableau [$index] . "\n";

$index = 1;

echo $tableau[$index] . "\n";

$index = 2;
echo $tableau[$index] . "\n";

$index = 3;
echo $tableau[$index] . "\n";

// affectation de la valeur 0 à une variable
$i = 0;

// affichage d'un élement du tableau en utilisant une variable comme index

echo $tableau[$i] . "\n";

$i++; // $i = $i + 1; on incrémente $i par palier de 1
//même resultat que $i = 1
echo $tableau[$i] . "\n";

$i++;

echo $tableau[$i] . "\n";

$i++;

echo $tableau[$i] . "\n";
