<?php
// __DIR__ cible le dossier "includes".
// Le "/../" permet de remonter à la racine du projet pour cibler config.php.
require_once __DIR__ . '/../config.php';
echo "<h3> Bonjour dans :".ETABLISSEMENT." </h3>";
/*
#Expérience 1 et 2 :
-- include 'fichier_inexistant.php' affiche un Warning mais continue.
// require 'fichier_inexistant.php' affiche une Fatal Error et arrête le script.
// include_once n'inclut le fichier qu'une seule fois, même s'il est appelé plusieurs fois. 
*/
?>