<?php

function premier($entier){
    for ($i=1; $i < $entier; $i++) {
        $nbdenominateur=0; 
        for ($j=1; $j < $entier; $j++) { 
            if ($i%$j==0) {
                $nbdenominateur++;
            }
        }
        if ($nbdenominateur==2) {
            echo '<p>les nombres premiers sont: '.$i.' </p>';
        }
    }

}

$nombre = 100;

premier($nombre);

?>
