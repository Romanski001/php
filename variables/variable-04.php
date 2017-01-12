<?php

$texte = 'foo bar baz';
$texteVide = '';
$nombre = 123;
$nombreNul = 0;

$resultat = (bool) $texte;
$resultat = boolval ($texte);

var_dump ($resultat);

//conversion du type chaîne de caracctères vers booléen
$resultat = (bool) $texteVide;
$resultat = boolval ($texteVide);
<?php
var_dump ($resultat);

//conversion du type nombre entier vers booléen
$resultat = (bool) $nombre;
$resultat = boolval ($nombre);

var_dump ($resultat);

//conversion du type nombre entier vers booléen
$resultat = (bool) $nombreNul;
$resultat = boolval ($nombreNul);

var_dump ($resultat);
