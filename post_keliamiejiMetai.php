<?php

$metai1=$_GET['metai1'];
$metai2=$_GET['metai2'];
$skaicius = 0;

for ($metai = $metai1; $metai <= $metai2; $metai++){
    if ($metai % 400 == 0) {
        echo $metai.' ' .'keliamieji'. '<br>';
    } elseif ($metai % 100 == 0) {
            echo $metai. ' '. 'ne keliamieji'. '<br>';
    } elseif ($metai % 4 == 0) {
        echo $metai . ' '. 'keliamieji'. '<br>';
    } else {
        echo $metai . ' '. 'ne keliamieji'. '<br>';
       }
       }
?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

