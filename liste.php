<?php
include "config.php";
if(file_exists("data/notes.csv")){
    echo "Le fichier est bien existé |";
}
else{
    echo"!! le fichier est non exist ";
}
if(!($file_note=fopen("data/notes.csv","r"))){
    echo"echec de l'ouvertue du fichier "; exit();
}
$moy_gen=0;
$count=0;
echo "<table border=1><th>Nom<th><th>Note Info</th><th>Note Math</th><th>Moyenne</th><th>Mention</th>";
while(($ligne=fgetcsv($file_note,100,";"))!==FALSE){
    $moyenne=($ligne[1]+$ligne[2])/2;
    $moy_gen+=$moyenne;
    $count++;
    $mention=mention($moyenne);
    echo "<tr><td>$ligne[0]</td> <td>$ligne[1]</td><td>$ligne[2]</td> <td>$moyenne</td><td>$mention</td></tr>";
}
$moy_gen=$moy_gen/$count;
echo "<td colspan='4'><b>Moyenne General</b></td><td>$moy_gen</td>";
echo"</table>";
?>