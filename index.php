<?php
    
    // $cena = array(
    //     'jogurt' => '2.50zł',
    //     'mleko' => '1.50zł',
    //     'masło' => '5zł',
    //     'ser' => '0.50zł'
    // );

    // krsort($cena);

    // sort($cena;)
    // rsort($cena);
    // asort($cena);
    // ksort($cena);
    // srsort($cena);
    // krsort($cena);

    // foreach ($cena as $klucz => $wartosc)
    // echo $klucz." kosztuje ".$wartosc."<br>\n";


    // $array1 = array(
    //     'array2' => $array2 = array(
    //         'witam' => '1',
    //         'świat' => '2'
    //     ),
    //     'array3' => $array3 = array(
    //         'hello' => '3',
    //         'world' => '4'
    //     ),
        
    // );

    // $array4 = array(
    //     'ar1' => array(
    //         'ar' => '1',
    //         'ar2' => '2',
    //     ),
    //     'ar2' => array(
    //         'ar' => '2'
    //     ),
    // );

    // var_dump($array1);
    // echo '<br>';
    // echo '<br>';
    // var_dump($array4);


    // foreach ($array1 as $ar => $asset){
    //     echo $ar." "."<br>";
    //     var_dump($asset);
    //     echo '<br>';
    //     foreach ($asset as $ar2 => $value){
    //         var_dump($value);
    //         echo '<br>';
    //         echo $ar2 ." ". $value ."<br>";
    //     }
    // }

    // $osoba1 = array (
    //     'A',
    //     'B'
    // );
    // $osoba2 = array (
    //     'os3' => 'C',
    //     'os4' => 'D'
    // );

    // $twoside = [];
    // $twoside[0] = $osoba1;
    // $twoside[1] = $osoba2;

    // // print_r($osoba1);
    // print_r($twoside[0][0]);
    // print($osoba2['os3']);
    // // print_r($twoside[0]['os1']);

    // var_dump(sizeof($twoside));
    // var_dump(count($twoside));

    // $array = [];

    // function fib($n){
    //     if($n == 0){ 
    //         return 0;
    //     }
    //     else if ($n == 1){
    //         return 1;
    //     }
    //     else{
    //        return fib($n-1) + fib($n-2);
    //     }
    // };

    // function zad1_1($array){
    //     for($i=0;$i<=100;$i++){
    //         $array[$i]=fib($i);
    //         echo $array[$i]."<br>";
    //     }
    // };
    
    // function zad1_2($array){
    //     $pow = 2;
    //     for($i=0;$i<=100;$i++){
    //         $array[$i]=$pow;
    //         $pow = $pow * 2;
    //         echo $array[$i]."<br>";
    //     }
    // };

    // function zad1_3($array){
    //     $n = 3;
    //     for($i=0;$i<=100;$i++){
    //         $array[$i]=$n;
    //         $n = $n + 3;
    //         echo $array[$i]."<br>";
    //     }
    // };

    // // zad1_1($array);
    // // zad1_2($array);
    // // zad1_3($array);

    
    $array = [1,2,3,4,5,6,-1,7,8,9,10];

    function zad2_1($array){
        echo max($array)."<br>";
        echo min($array);
    };

    function zad2_2($array){
        $num = 0;
        for($i=0;$i<sizeof($array);$i++){
            $num += $array[$i];
        }
        echo $num/sizeof($array);
    };

    function zad2_3($array){
        $num = 0;
        for($i=0;$i<sizeof($array);$i++){
            if($array[$i]==3){
                $num += 1;
            }
        }
        echo $num;
    };




    // zad2_1($array);
    // zad2_2($array);
    // zad2_3($array);

?>
