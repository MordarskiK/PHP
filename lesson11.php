<?php

$value = "I am cookie";

setcookie("TestCookie",$value,time()+3600);
setcookie("TestCookie1",$value,time()+3600);
setcookie("TestCookie2",$value,time()+3600);


echo $_COOKIE["TestCookie"];
echo "<br>";
print_r($_COOKIE);

setcookie("HelloThere","Jan",time()+3600);
echo "<br>";
echo "Hello there ".$_COOKIE["HelloThere"];


setcookie("TestCookie1",false,-3600);


session_start();
$_SESSION["login"] = "edek";


session_start();

echo "<br>";
echo $_SESSION["login"];


session_start();
if(@$_SESSION["num_visits"]>1){
    echo "Data ostatniej wizyty: ";
    echo date("j F Y, H:i:s:",$_SESSION["last_visit"]);
    echo "<br>";
    echo "Liczba wizyt: ".$_SESSION["num_visits"];
}
else{
    echo "To jesyt Twoja pirwasza wizyta";
    $_SESSION["num_visits"]=1;
}

$_SESSION["last_visit"] = time();
$_SESSION["num_visits"]++;


?>
