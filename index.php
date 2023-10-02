<?php
    $boolvar=true;
    echo $boolvar;
    
    echo "<br>";

    $boolvar=false;
    var_dump($boolvar);

     echo "<br>";

    $boolvar=5;
    echo "mam $boolvar oczu";
     echo "<br>";
    echo 'mam $boolvar oczu';
     echo "<br>";
    echo "mam " . "2" . " oczy";
    
     echo "<br>";

    function fun (){
        global $boolvar;
        $boolvar = 188;
    }
    fun($boolvar);
    echo $boolvar;

     echo "<br>";

    function pole($a,$b){
        return $a*$b;
    };
    echo pole(2,3);

     echo "<br>";

    $array = [1,2,3,4];
    echo $array[1];

     echo "<br>";

    $noData = null;
    var_dump($noData);

     echo "<br>";

    
	
}


?>