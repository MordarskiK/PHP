<?php
//zad1
$randArray = array();
for ($i = 0;$i<10;$i++){
    $randArray[$i] = rand(5,25);
}

//zad2
print_r($randArray);
echo "<br>";

//zad3
foreach($randArray as $elem){
    if($elem%5==0){
        echo "$elem, ";
    }
}
echo "<br>";

//zad4
$num = 0;
foreach($randArray as $elem){
    if($elem>10){
        $num++;
    }
}
echo "$num<br>";

//zad5
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
$data = mktime(8,10,0,10,8,2024);
$miesiac = array('XII',"I","II","II","IV","V","VI","VII","VIII","IX","X","XI");
echo "Dzis jest ".date("d",$data).".".$miesiac[date("m",$data)].".".date("Y",$data)." rok<br>Aktualna godzina to: ".date("H:i",$data)."<br>";

//zad7
function zad7($x){
    if($x%3==0){
        echo "liczba $x jest podzielna przez 3";
    } else{
         echo "liczba $x nie jest podzielna przez 3";
    }
}
zad7(9);

?>