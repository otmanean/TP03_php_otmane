<?php
// 1. Affichage de la date du jour
$dateDuJour = date('d/m/Y');

// 2. Calcul du nombre de jours restants avant la fin du semestre
$aujourdHui = new DateTime();
$dateFinSemestre = new DateTime('2026-12-30'); 
$intervalle = $aujourdHui->diff($dateFinSemestre);
$joursRestants = $intervalle->format('%a jours');

// 3. Validation d'une date saisie 
$jour = 29; $mois =8 ; $annee = 2026;
$estValide = checkdate($mois, $jour, $annee);
?>
<footer>
    <hr>
    <p>Aujourd'hui est le : <strong><?= $dateDuJour ?></strong></p>
    <p>Temps avant la fin du semestre : <strong><?= $joursRestants ?></strong></p>
    <p>La date du 29/8/2026 est-elle valide ? <strong><?= $estValide ? 'validé' : 'Non' ?></strong></p>
</footer>