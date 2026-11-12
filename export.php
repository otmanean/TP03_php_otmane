<?php
$resultats = [
    ['nom' => 'Ahmed', 'notes' => [14, 16], 'moyenne' => 15],
    ['nom' => 'otmane', 'notes' => [12, 13], 'moyenne' => 12.5]
];
$file="data/notes.json";
if(!(fopen($file,"w"))){
    echo "echec d'ouverture de fichier ";
}
$chaine_json=json_encode($resultats);
file_put_contents($file,$chaine_json);

$tableau_decode=file_get_contents($file,TRUE);
$decode_json=json_decode($tableau_decode);

echo "<h3>Lecture avec json_decode :</h3>";
echo "<pre>";
print_r($tableau_decode);
echo "</pre>";

// 4. Comparaison serialize() et json_encode()
$donneesSerializees = serialize($resultats);
echo "<h3>Résultat de serialize() :</h3>";
echo $donneesSerializees;
/* Question : Lequel de ces formats est directement exploitable par une application JavaScript ?
Réponse : Le format JSON (json_encode()) est nativement et directement exploitable par JavaScript */
?>