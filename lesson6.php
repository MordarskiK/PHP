<?php

echo 'date(\"Y-m-d\") = ' . date("Y-m-d") . '<br>';
echo 'date(\"d-m-Y\") = ' . date("d-m-Y") . '<br>';
echo 'date(\"j, M Y\") = ' . date("j, M Y") . '<br>';
echo 'date(\"jS, M Y\") = ' . date("jS, M Y") . '<br>';
echo 'date(\"G:i:s\") = ' . date("G:i:s") . '<br>';
echo 'date(\"h:i:sa\") = ' . date("h:i:sa") . '<br>';
echo 'date(\"Y-m-d G:i:s\") = ' . date("Y-m-d G:i:s") . '<br>';
echo '<br>';

function sort_a_A(){
    $temp = array_merge(range('a','z'),range('a','z'));
    sort($temp);

    for ($i=0;$i<count($temp);$i++){
        if($i%2==true){
            $temp[$i]=strtoupper($temp[$i]);
        }
    }
    return $temp;
}

// $alphabet = array_merge(range('a','z'),range('A','Z'));
function allDates($alphabet){
    foreach($alphabet as &$value){
        if (date("$value")!=$value){
            echo "date($value) = ".date("$value").'<br>';
        }
    }
}

allDates(sort_a_A());
echo '<br>';

echo time().'<br>';
print_r(getdate());
echo '<br>';
echo 'mktime(hour, minute, second, month, day, year, is_dst)'.'<br>';
echo mktime(0,0,0,11,11,2023).'<br>';



?>
