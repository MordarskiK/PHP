<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tab = array();

        for($i=0;$i<10;$i++){
            $tab[$i] = rand(1,20);
        }

        foreach($tab as $key=>$value){
            echo($value);
            echo("<br>");
        }

        echo("<br>");
        $num = $tab[0];
        // foreach($tab as $key=>$value){
        //     if($num>$value){
        //         $num = $value;
        //     }
        // }
        // echo($num);

        // $search_num = rand(1,20);
        // echo "szukana: ".$search_num;
        // $num_found = 0;
        // foreach($tab as $key=>$value){
        //     if($value==$search_num){
        //         $num_found++;
        //     }
        // }
        // echo "<br>";
        // echo($num_found);
    ?>
</body>
</html>

///////////////////////////////////////////////////////////////

<?php
    $tab = array();

    for($i=0;$i<10;$i++){
        $tab[$i] = rand(1,20);
    }

    foreach($tab as $key=>$value){
        echo($value);
        echo("<br>");
    }
    
    $avg = 0;
    foreach($tab as $value){
        $avg += $value;
    }
    echo "srednia: ".$avg/10;

    echo("<br><br>");
    for($i=1;$i<=100;$i++){
        if($i%2!=0 && $i%3==0){
            echo $i.", ";
        }
    }
    echo "<br><br>";
    $num1 = 11;
    $num2 = 2;
    echo "num1: ".$num1."<br>num2: ".$num2."<br>";
    if($num1%$num2==0){
        echo "liczby są podzielne";
    }else{
        echo "liczby nie są podzielne";
    }

?>

///////////////////////////////////////

<?php
    $tab = array();
    $num10 = 19;
    $num2 ='';
    while($num10!=0){
        if($num10%2==1){
            $num2 = $num2."1";
            array_unshift($tab,1);
        }else{
            $num2 = $num2."0";
            array_unshift($tab,0);
        }
        $num10 = floor($num10/2);
    }
    echo strrev($num2)."<br>";
    foreach($tab as $num){
        echo $num;
    }

?>


