<?php

$getal = 6;
$getal2 = 9;
echo getallenbijelkaaroptellen($getal,$getal2);



function getallenbijelkaaroptellen($getal,$getal2){
    $antwoord = $getal + $getal2;
    //return $antwoord;//
}

// 1 mijl is 1.6 kilometer
// Een functie die mijlen kan omrekenen naar kilometers
$mijlen = 100;
// Uitkomst moet 160 worden

$kilomter = 200;
echo kilometeromrekenennaarmijlen($mijlen,$kilomter) . '<br>';

function kilometeromrekenennaarmijlen($kilometer){
    $antwoord = 1.6 * $kilometer;
    return $antwoord;//
}

$celcius = 20;
echo zetcelciusominfahrenheit($celcius);

function zetcelciusominfahrenheit($celcius){
    $fahrenheit = $celcius*1.8+32;
    return $fahrenheit;
}

echo 'Let op: ';
$getal3 = 11;
echo kijkenofgetalkandelendoor3($getal3) . '<br>';

if (kijkenofgetalkandelendoor3(12)) {
    echo 'Ja, deelbaar door 3.';
} else {
    echo 'Nee, niet deelbaar door 3.';
}

function kijkenofgetalkandelendoor3($getal3){
   if ($getal3 % 3==0) {
       return true;
   } else {
       return false;
   }



}
$school = loohcs;
echo zethetwoordschoolacherstevoren($school) . '<br>';

function zethetwoordschoolacherstevoren($school){
    return $school;
}

