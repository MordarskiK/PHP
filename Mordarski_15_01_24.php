<?php

$table1 = [5,8,7,3];
$table2 = [4,6,1,2,9];

function sort_tables($table1,$table2){
    $array = array_merge($table1,$table2);

    if(count($table1)>count($table2)){
        for($i=0;$i<count($array);$i++){
            for($j=$i+1;$j<count($array);$j++){
                if($array[$i]<$array[$j]){
                    $temp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }
    }

    elseif (count($table1)==count($table2)){
        return "Tablice są równe";
    }

    else {
        for($i=0;$i<count($array);$i++){
            for($j=$i+1;$j<count($array);$j++){
                if($array[$i]>$array[$j]){
                    $temp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }
    }

    return $array;
}

if(is_array(sort_tables($table1,$table2))){
    print_r(sort_tables($table1,$table2));
}
else{
    echo sort_tables($table1,$table2);
}

?>