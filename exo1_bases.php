<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 TP_3</title>
</head>
<body>
    <h2>## Partie 1 TP3: Variables, constantes, types et chaînes </h2>
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
// la variable $2x et `$x-y` sont invalides car il commence par un nombre et l'autre contient la caractère '-'.
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

#Exercice 1.4 :
$Test=42;
$Test=(string) $Test;
var_dump($Test);
var_dump((bool) 0);     
var_dump((bool) 0.0);   
var_dump((bool) "0");   
var_dump((bool) "");    
var_dump((bool) "abc"); 
var_dump((bool) []);    
var_dump((bool) null);  

echo (int)3.9 .", <br>".(int)"12abc" .",<br> ".(float)"1.5e3".', <br>'.(int)true .', <br>';
$dec = 255;
$hex = 0xFF;
$oct = 0377;
$bin = 0b11111111;
echo "$dec, $hex, $oct, $bin <br>";

#Exercice 1.5 :
$traitees = "égales à";
$ici = 2;
echo 'Ahmed a dit : "J\'ai réussi"<br>';
echo "Voulez-vous supprimer C:\\*.*?<br>";
echo 'Ceci n\'affichera pas \n de nouvelle ligne<br>';
echo 'Les variables ne seront pas $traitees $ici<br>';
echo "Les variables ne seront pas $traitees $ici <br>";

$chaine="*Bonjour*";
echo trim($chaine,"*")."<br>";
$taille = strlen($chaine);
for($i=0;$i<strlen($chaine);$i++){
    echo $chaine[$i] ."<br>";
}
?>
</body>
</html> 
