<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 TP_3</title>
</head>
<body>
<?php 
$état=1;
echo "Hello PHP <br>";
//commentaire sur un seule ligne avec //
#commentaire sur un seule ligne avec #
/*
commentaire
sur plusieurs
lignnes
*/
#`$x`, `$_x`, `$2x`, `$x-y`, `$Prix_HT`, `$prix ht`, `$état`
// la variable $2x est invalide car il commence par un nombre .
// $prix ht non valide car: il contient un espace;
// $A et $a sont deux variables distincts car le syntaxe PHP est sensible a la casse ...;
require 'config.php';
echo ETABLISSEMENT ."<br>";
echo NOTE_MIN ."<br>";
echo NOTE_MAX ."<br>";
echo SEUIL ."<br>";
echo defined('SEUIL')."<br>";
echo defined('INCONNUE');
/*
- Que se passe-t-il si vous affichez une constante non définie ?

- Quelle différence y a-t-il entre `const` et `define()` ?

*/
$prix_ht = 60 ;
$tva = 20;
$Prix_TTC=$prix_ht * (1+($tva/100));
echo "Le prix TTC EST: $Prix_TTC <br>";

$Test=42;
$Test=(string) $Test;
var_dump($Test);
?>
</body>
</html>