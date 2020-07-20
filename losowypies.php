<?php
$plik = "123.txt"; //tutaj dajecie plik txt 
$plik_array = file($plik); // liczba linijek z pliku
$liczba_linijek = count($plik_array); // \/
$ost_lin = $liczba_linijek - 1; // odejmowanie -1 od linijek z pliku ( php czyta plik od 1 linijki)
$losowa_linijka = rand(0, $ost_lin); // losowanie losowej linijki
$losowypies = $plik_array[$losowa_linijka]; // wylosowa liczba z array bedzie tekstem z pliku




    $losowypies = [ 'pies' => $losowypies ]; // mozecie sobie zmienic 'pies' na np. 'los' WAŻNE ZEBY BYLO W '

header('Content-type: application/json');
echo json_encode( $losowypies, JSON_UNESCAPED_UNICODE );
?>
