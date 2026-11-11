<?php
require 'config.php';

if (!isset($_POST['nom'], $_POST['note_info'], $_POST['note_math'])) {
    echo 'Erreur : formulaire incomplet.';
    exit;
}

if (empty($_POST['nom']) || empty($_POST['note_info']) || empty($_POST['note_math'])) {
    echo 'Erreur : veuillez remplir tous les champs.';
    exit;
}

$nom = trim($_POST['nom']);
$noteInfo = trim($_POST['note_info']);
$noteMath = trim($_POST['note_math']);

if (!is_numeric($noteInfo) || !is_numeric($noteMath)) {
    echo 'Erreur : les notes doivent être des nombres.';
    exit;
}

$noteInfo = (float) $noteInfo;
$noteMath = (float) $noteMath;

if ($noteInfo < NOTE_MIN || $noteInfo > NOTE_MAX || $noteMath < NOTE_MIN || $noteMath > NOTE_MAX) {
    echo 'Erreur : les notes doivent être comprises entre ' . NOTE_MIN . ' et ' . NOTE_MAX . '.';
    exit;
}

$nomSecurise = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
$noteInfoSecurisee = htmlspecialchars((string) $noteInfo, ENT_QUOTES, 'UTF-8');
$noteMathSecurisee = htmlspecialchars((string) $noteMath, ENT_QUOTES, 'UTF-8');

echo '<h2>Récapitulatif</h2>';
echo '<p>Nom : ' . $nomSecurise . '</p>';
echo '<p>Note Info : ' . $noteInfoSecurisee . '</p>';
echo '<p>Note Math : ' . $noteMathSecurisee . '</p>';                                                                  0     

// Un mot de passe doit utiliser POST car GET expose les données dans l'URL.
// $_REQUEST contient $_GET, $_POST et $_COOKIE fusionnés.
?>