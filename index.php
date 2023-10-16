<?php
    // $num1 = 10;
    // $num2 = 5;
    // $oper = "/";  //["+","-","*","/","%","**"]

    // function add($num1,$num2){
    //     return $num1 + $num2;
    // }
    // function sub($num1,$num2){
    //     return $num1 - $num2;
    // }
    // function mult($num1,$num2){
    //     return $num1 * $num2;
    // }
    // function divi($num1,$num2){
    //     if ($num2 == 0){
    //         return "Openhaimer moment";
    //     }
    //     else{
    //         return $num1 / $num2;
    //     }
    // }
    // function modulo($num1,$num2){
    //     return $num1 % $num2;
    // }
    // function power($num1,$num2){
    //     return $num1 ** $num2;
    // }

    // switch ($oper){
    //     case "+":
    //         echo add($num1,$num2);
    //         break;
    //     case "-":
    //         echo sub($num1,$num2);
    //         break;
    //     case "*":
    //         echo mult($num1,$num2);
    //         break;
    //     case "/":
    //         echo divi($num1,$num2);
    //         break;
    //     case "%":
    //         echo modulo($num1,$num2);
    //         break;
    //     case "**":
    //         echo power($num1,$num2);
    //         break;
    //     default:
    //         echo "somethings wrong I can feel it";
    // }

    // function grade($num){
    //     switch (TRUE){
    //         case $num>=0 and $num<=39:
    //             echo "niedostateczny";
    //             break;
    //         case $num>=40 and $num<=49:
    //             echo "dopuszczający";
    //             break;
    //         case $num>=50 and $num<=75:
    //             echo "dostateczny";
    //             break;
    //         case $num>=76 and $num<=89:
    //             echo "dobry";
    //             break;
    //         case $num>=90 and $num<=97:
    //             echo "bradzo dobry";
    //             break;
    //         case $num>=98 and $num<=100:
    //             echo "celujący";
    //             break;
    //         default:
    //             echo "cos ty dostał za ocene!?";
    //     }
    // }

    // grade(0)

    // function leapYear($year){
    //     if($year%4==0){
    //         echo "rok przestępny";
    //     }
    //     else{
    //         echo "nie rok przestępny";
    //     }
    // }

    // leapYear(2020)

    // function triangle($num1,$num2,$num3){
    //     if ($num1 + $num2 > $num3 and $num3 + $num2 > $num1 and $num1 + $num3 > $num1){
    //         echo "można zrobić tójkąt";
    //     }
    //     else {
    //         echo "nie można zrobić trójkąta";
    //     }
    // }

    // triangle(3,4,5)

    
    function passStrenght($haslo){
        if (strlen($haslo) < 4){
            echo "hasło słabe";
        }
        elseif (strlen($haslo) < 8){
            echo "hasło średnie";
        }
        elseif (strlen($haslo) >= 8){
            echo "hasło mocne";
        }

        if (preg_match('~[0-9]+~', $haslo)) {
            echo "hasło mocne";
        }
        else{
            echo "haslo słabe";
        }

        if (ctype_upper($haslo)){
            echo "hasło mocne";
        }
        else{
            echo "haslo słabe";
        }

        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $haslo)){
            echo "hasło mocne";
        }
        else{
            echo "haslo słabe";
        }
    }

    passStrenght('Haslo12!@');
?>