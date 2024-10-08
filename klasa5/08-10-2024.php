<?php
//zad1
$randArray = array();
for ($i = 0;$i<10;$i++){
    $randArray[$i] = rand(5,25);
}

//zad2
echo "-----------------zad2-----------------<br>";
foreach($randArray as $elem){
    echo "$elem ";
}
echo "<br>";
print_r($randArray);
echo "<br>";

//zad3
echo "-----------------zad3-----------------<br>";
foreach($randArray as $elem){
    if($elem%5==0){
        echo "$elem ";
    }
}
echo "<br>";

//zad4
echo "-----------------zad4-----------------<br>";
$num = 0;
foreach($randArray as $elem){
    if($elem>10){
        $num++;
    }
}
echo "$num<br>";

//zad5
echo "-----------------zad5-----------------<br>";
$iloczyn = 1;
$j = 1;
foreach($randArray as $elem){
    if($j%4==0){
        $iloczyn *= $randArray[$j-1];
    }
    $j++;
}
echo "$iloczyn<br>";

//zad6
echo "-----------------zad6-----------------<br>";
$miesiac = array('XII',"I","II","II","IV","V","VI","VII","VIII","IX","X","XI");
echo "Dzis jest ".date("d").".".$miesiac[date("m")].".".date("Y")." rok<br>Aktualna godzina to: ".date("H:i")."<br>";

//zad7
echo "-----------------zad7-----------------<br>";
function zad7($x){
    if($x%3==0){
        echo "liczba $x jest podzielna przez 3";
    } else{
         echo "liczba $x nie jest podzielna przez 3";
    }
}
zad7(9);

?>
