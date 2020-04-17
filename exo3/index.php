<?php

function TesterSiJePeuxEcrireAvec($magazine, $message)
{
    for ($i = 0; $i < strlen($message); $i++) {
        $lettreCouranteDuMessage = $message[$i];
        if ($lettreCouranteDuMessage == " ") {  //means that if there are spaces, the loop stops and the code goes on 
            continue;
        }
        $lettrePresente = false;
        for ($j = 0; $j < strlen($magazine); $j++) {  //on rentre dans la chaine, lettre par lettre et on boucle dessus 
            $lettreCouranteDuMagazine = $magazine[$j];
            if ($lettreCouranteDuMessage == $lettreCouranteDuMagazine) {
                $lettrePresente = true;
                $magazine[$j] = " ";
                break;  //on arrête la boucle
            }
        }
        if ($lettrePresente == false) {
            return false;
        }
    }
    return true;
}

$magazine = "bonjour aujourd'hui il fait beau";
$lettre = "content content";    //return tu peux pas l'écrire car les lettres sont beaucoup trop nombreuses pour boucler sur le magasine

if (TesterSiJePeuxEcrireAvec($magazine, $lettre)) {
    echo "tu peux l'ecrire";
} else {
    echo "tu peux pas l'ecrire";
}

// ************************************************OTHER WAY TO DO THE EXERCISE *****************************************************

// <?php

// function CanWrite($magazine, $messageToWrite)
// {
//     $nbOccurenceByLetter = array();
//     for ($i = 0; $i < strlen($magazine); $i++) {
//         $currentLetter = $magazine[$i];
//         if (array_key_exists($currentLetter, $nbOccurenceByLetter)) {
//             $nbOccurenceByLetter[$currentLetter] += 1;
//         } else {
//             $nbOccurenceByLetter[$currentLetter] = 1;
//         }
//     }
//     for ($i = 0; $i < strlen($messageToWrite); $i++) {
//         $letterToWrite = $messageToWrite[$i];
//         if (!array_key_exists($letterToWrite, $nbOccurenceByLetter)) {
//             return false;
//         }
//         if ($nbOccurenceByLetter[$letterToWrite] > 0) {
//             --$nbOccurenceByLetter[$letterToWrite];
//         } else {
//             return false;
//         }
//     }
//     return true;
// }

// if (CanWrite("aba", "aaa")) {
//     echo "tu peux ecrire ta lettre";
// } else {
//     echo "tu ne peux ecrire ta lettre";
// }
// echo "\n--------------------------\n";
// echo CanWrite("bonjour", "a"); // returns false 
// echo "\n--------------------------\n";
// echo CanWrite("bonjour, je suis content", "jour j"); // returns true
// echo "\n--------------------------\n";
