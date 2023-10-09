<?php
   $temp = 37;

   if ($temp > 41 or $temp < 36){
    echo "u ded";
   }
   elseif ($temp >37 and $temp <=41){
    echo "gorączka";
   }
   elseif ($temp >36.6 and $temp <=37){
    echo "st. podgorączkowy";
   }
   elseif ($temp >=36 and $temp <=36.6){
    echo "ok";
   }

   switch (true) {
    case ($temp > 41 or $temp < 36):
        print("u ded");
        break;

    case ($temp >37 and $temp <=41):
        print("gorączka");
        break;

    case ($temp >36.6 and $temp <=37):
        print("st. podgorączkowy");
        break;

    case ($temp >=36 and $temp <=36.6):
        print("ok");
        break;

    default:
        print("wth u tiping bro");
        break;
   }

    define ("WARTOŚĆ_N", 123.456);
    echo WARTOŚĆ_N;

    $a = 2;
    $b = "2";
    
    $a == $b;
    $a === $b;
    $a != $b;
    $a !== $b;

?>
