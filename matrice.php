<?php
/*définition de la fonction somme de matrices*/
function somme($matrix1, $matrix2){
    $s = [[0, 0, 0],[0, 0, 0], [0, 0, 0]];
    for ($i=0; $i < 3; $i++) { 
        for ($j=0; $j < 3; $j++) { 
            $s[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
        }
    }
    return $s;
}
/*définition de la fonction produit de deux matrices*/

function produit($matrix1, $matrix2){
    $prod = [[0, 0, 0], [0, 0, 0], [0, 0, 0]];
    for ($i=0; $i < 3; $i++) { 
        $somme = 0;
        for ($j=0; $j < 3; $j++) { 
            for ($k=0; $k < 3; $k++) { 
                $somme += $matrix1[$i][$k] * $matrix2[$k][$j];
            }
            $prod[$i][$j] = $somme;
        }
    }
    return $prod;
}
/*définition de la fonction afficher*/

function afficher($matrix){
    for ($i=0; $i < 3; $i++) { 
        for ($j=0; $j < 3; $j++) { 
            if ($i>=$j) {
                echo $matrix[$i][$j];
            }
            else {
                echo $matrix[$i][$j];
            }
            echo ' ';
        }
        echo '</br>';
    }
}


$matriceA = [[1, 1, 1], [1, 1, 1], [1, 1, 1]];

afficher($matriceA);

afficher(somme($matriceA, $matriceA));

afficher(produit(somme($matriceA,$matriceA), $matriceA));
?>