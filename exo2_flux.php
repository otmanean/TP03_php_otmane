<?php
require 'config.php';
# Exercice 2.1 : `if / elseif / else`
echo "<h3>#s Partie 2 : Structures de contrôle et boucles</h3>";
mention(SEUIL);
# Exercice 2.2 :
$current_DATE = date("m");
switch($current_DATE){
    case 1:echo "Le mois courant est janvier <br>";  break;
    case 2:echo "Le mois courant est Fevrier <br>" ; break;
    case 3:echo "Le mois courant est Mars <br>" ; break;
    case 4:echo "Le mois courant est Avril <br>" ; break;    
    case 5:echo "Le mois courant est Mai <br>" ; break;
    case 6:echo "Le mois courant est juin <br>" ; break;
    case 7:echo "Le mois courant est juillet <br>" ; break;
    case 8:echo "Le mois courant est Oùt <br>" ; break;
    case 9:echo "Le mois courant est Septembre <br>" ; break;
    case 10:echo "Le mois courant est Octobre <br>" ; break;
    case 11:echo "Le mois courant est Novembre <br>" ; break;
    case 12:echo "Le mois courant est Decembre <br>" ; break;
    default : echo "le moi est Invalide <br>"; break;
}
#3. Question : que se passe-t-il si vous oubliez un `break` dans un `case` ?
# Réponse :Si on oublie un break, PHP exécute le code du 'case' suivant sans vérifier sa condition.

# Exercice 2.3 : Boucles
for($i=1;$i<=6;$i++){
    for($j=0;$j<$i;$j++){
        echo "*";
    }
    echo "<br>";
}
$N=0;
while($N <=20){
    if ($N==10){
        echo "<strong>$N | </strong>";
    }
    else {
        echo "$N | <br>";
    }
    $N+=2;}


for ($i=0;$i<=10;$i++){
    if($i%2 != 0){
        continue ;
    }
    echo $i ." <br>" ;
}

// 4. While, switch, break 2
$i = 1;
while (true) {
    switch ($i) {
        case 5:
            echo "At 5<br>";
            break; // Sort  du switch
        case 10:
            echo "At 10; quitting<br>";
            break 2; // Sort du switch ET du while
    }
    $i++;
}
// 5. Avec do-while
$j = 0;
do {
    if ($j == 10) echo "<strong>$j</strong><br>";
    else echo "$j<br>";
    $j += 2;
} while ($j <= 20);
// Différence : do-while exécute le bloc au moins une fois avant d'évaluer la condition.
?>