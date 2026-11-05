<?php
const ETABLISSEMENT="Faculté des sciences semlaliya";
define('NOTE_MIN' , 0);
define('NOTE_MAX' , 20); 
define('SEUIL' , 10);
## La fonction mention pour affecter la mention de chaque intervalle de notes:

function mention($note) {
    if ($note >= 16) { return "Très bien"; }
    elseif ($note >= 14) { return "Bien"; }
    elseif ($note >= 12) { return "Assez bien"; }
    elseif ($note >= SEUIL) { return "Passable"; }
    else { return "Ajourné"; }
}
?>