<?php

function srednia(){
    $total=0;

    foreach(func_get_args() as $value){
        $total += (int)$value;
    }

    return $total/func_num_args();
}

// echo round(srednia(1,3,42),2)

function row_kwadr($a,$b,$c){

    $delta = pow($b,2)-4*$a*$c;

    // echo "Delta = ".$delta;
    // echo "<br>";

    if ($delta>0) {
        $x1 = (-$b-sqrt($delta))/(2*$a);
        $x2 = (-$b+sqrt($delta))/(2*$a);

        // echo "x1 = ".$x1;
        // echo "<br>";
        // echo "x2 = ".$x2;
        // echo "<br>";

        return [$x1,$x2];
    }

    elseif($delta==0){
        $x=(-$b)/(2*$a);

        // echo "x = ".$x;
        // echo "<br>";

        return $x;
    }

    else return null;
}


$a = 1; $b = 2; $c = -3; 

// if (is_array(row_kwadr($a,$b,$c))) {
//     echo "Mamy 2 rozwiązania:<br>";
//     foreach(row_kwadr($a,$b,$c) as $x){
//         print_r(round($x,4));
//         echo "<br>";
//     }
// }
// elseif(row_kwadr($a,$b,$c)!=null){
//     echo "Mamy 1 rozwiązanie:<br>";
//     print_r(round(row_kwadr($a,$b,$c),4));
// }
// else {
//     print_r("Nie ma rozwiązań");
// }


function sortowanie($table){

    for($i=0,$i<count($table),$i++){
        if ($table[$i]<$table[$i+1]) {
            $table[$i],$table[$i+1]=$table[$i+1],$table[$i];
        }
    }

    return $table;
}

print_r(sortowanie([1,2,3,4,5]));







?>

