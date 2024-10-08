<?php
    $date = getdate();
    $dzien = $date["mday"];
    $dzien_tygodnia = $date["weekday"];
    $miesiac = $date["mon"];
    $rok = $date["year"];
    $godzina = $date["hours"];
    $minuta = $date["minutes"];
    $sekunda = $date["seconds"];

    if ($dzien<10) $dzien="0".$dzien;
    if ($miesiac<10) $miesiac="0".$miesiac;
    if ($godzina<10) $godzina="0".$godzina;
    if ($minuta<10) $minuta="0".$minuta;
    if ($sekunda<10) $sekunda="0".$sekunda;

    echo "Data to $dzien-$miesiac-$rok  $godzina:$minuta:$sekunda<br><br>";
    echo time()."<br><br>";
    echo date("G H i l m s Y y")."<br>";
    echo date("a A c d D F g")."<br>";
    /*
    G - godzina format 24  1
    H - godzina format 24  01
    i - minuta z zerem 
    l - pelna nazwa dnia
    m - misiac liczba z zerem 
    s - sekundy z zerem 
    Y - rok format 4 liczbowy
    y - rok format 2 liczbowy 
    a - am/pm
    A - AM/PM
    c - data i czas format ISO 8601
    d - dzien miesiaca
    D - dzien tygodnia (3 litery)
    F - nazwa miesiaca
    g - godzina format 12
    */

    $dni = array('Nied','Pon','Wt','Śr','Czw','Pt','Sob'); 
    $miesiace = array('Grudzien','Styczen','Luty','Marzec','Kwiecien','Maj','Czerwiec',
                        'Lipiec','Sierpien','Wrzesien','Pazdziernik','Listopad');
    $godz = date("H");
    $min = date("i");
    if($min>0) $godz-=1;
    echo "Data jest ".$dni[date("w")]." ".date("d")." ".$miesiace[date("m")]." ".date("Y")."r<br><br>";


    $nowy_czas = mktime(16,0,0,10,8,2024);
    echo date('d-m-Y H:i:s  m',$nowy_czas);
?>