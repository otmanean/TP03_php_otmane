<?php
include 'exo2_flux.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 3</title>
</head>
<body>
<h2> -Partie 3: Tableaux :</h2>
<h3> Exercice 3.2 : Affichage HTML</h3>
<?php

$notes = [
    "Mohamed" => 16, "Ahmed" => 14, "Hind" => 13, "Aicha" => 15,
    "Samir" => 13, "Zakaria" => 13, "Rafik" => 10, "Ilham" => 9,
    "Hamza" => 7, "Sami" => 7, "Noura" => 14
];

$modules=["Algebre","Analyse","Proba"];
foreach($modules as $mod){
    echo $mod ." , " ;
}
echo "<table border='1'><tr><th>Nom</th><th>Note</th><th>Mention</th></tr>";
foreach($notes as $nom => $note){
    $style = ($note < SEUIL) ? "color:red;" : "";
    echo "<tr style='$style'><td>$nom</td><td>$note</td><td>".mention($note)."</td></tr>";
}    
echo "</table>";
echo "<h4># Exercice 3.3 : Statistiques</h4>";
$effectifs=[];
$somme=0;
$moyenne=0; 
$note_min=20;
$note_max=0;
foreach($notes as $nom => $note ){
    if($note>$note_max ){
        $note_max=$note;
    }
    elseif($note<$note_min){
        $note_min=$note;
    }
    $ment = mention($note);
    if (!isset($effectifs[$ment])) $effectifs[$ment] = 0;
    $effectifs[$ment]++;
    $somme += $note;
}
$moyenne=$somme/count($notes);

echo "<li>la somme des Notes : $somme </li>";
echo "<li>la moyenne des Notes : ".number_format($moyenne,2)." </li>";
echo "<li>la minimum des Notes : $note_min </li>";
echo "<li>la maximum des Notes : $note_max </li>";
echo "Résultats avec `array_sum`, `count`, `max` et `min`. <ul>";
echo "<li>".array_sum($notes)."</li>";
echo "<li>".array_sum($notes)/count($notes)."</li>";
echo "<li>".min($notes)."</li>";
echo "<li>".max($notes)."</li>";
echo "</ul>";
print_r($effectifs);
echo "<h4>## Exercice 3.4 : Tri</h4>";

function afficher($tab) {
    foreach ($tab as $k => $v) { echo "$k : $v | "; } echo "<br>";
}echo "// Noms croissants<br>";
ksort($notes); afficher($notes);  echo "// Notes décroissantes<br>";
arsort($notes); afficher($notes); echo" // Noms décroissants<br>";
krsort($notes); afficher($notes); echo "// Notes croissantes<br>";
asort($notes); afficher($notes);   
// Sur un tableau indexé ($modules), on utiliserait sort() ou rsort().
$a = ["x" => 1, "y" => 2];
$b = ["y" => 2, "x" => 1];
// $a + $b : Union. Conserve les clés de $a, ajoute celles de $b non existantes (donc ["x"=>1, "y"=>2])
// $a == $b : true (mêmes paires clé/valeur)
// $a === $b : false (l'ordre des éléments n'est pas strictement identique)
?>
</body>

</html>