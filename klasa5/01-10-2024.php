<?php 

echo time()."<br>";

$date = getdate();
$day = $date["mday"];
$month = $date["mon"];
$year = $date["year"];
echo $day."-".$month."-".$year."<br>";

$hour = $date["hours"];
$min = $date["minutes"];
$sec = $date["seconds"];
if($hour<10)$hour = "0".$hour;
if($min<10)$min = "0".$min;
if($sec<10)$sec = "0".$sec;
echo $hour.":".$min.":".$sec."<br>";

echo date("Y-m-d")."<br>";
echo date("H-i-sa")."<br><br>";
/////////////////////////////////////////////////////////
echo "Dziś jest ".date("l")."<br>";
echo date("d F Y")."r.<br>";
echo "Jest to ".getdate()["yday"]." dzień roku<br>";
$h = date("H");
if(date("i")>0){
    $h = 15-$h;
}else {
    $h = 16-$h;
}
echo "Za ".$h." h i ".(60-date("i"))." min koniec lekcji<br>";

$czas = mktime(16,0,0,10,1,2024);
echo date("d-m-Y     G:i:s",$czas),"<br>";
////////////////////////////////////
function suma($x,$y){
    echo "<br>","suma: ",$x+$y,"<br>";
}
suma(2,3);

function liczba_pierwsza($x){
    if($x>=2){
        for($i = 2;$i<$x;$i++){
            if($x%$i==0){   
                echo "liczba nie pierwsza<br>";
                return;
            }
        }
    }
    echo "liczba pierwsza<br>";
}
liczba_pierwsza(5);
?>
