<?php
// setcookie("nazwa","msg",time()+3600,"/","localhost",false);
// if (isset($_COOKIE["nazwa"])){
//     echo "staly klient";
// }else{
//     echo "witamy po raz pierwszy";  
// }

// $czas = date("Y-m-d G:i:s");
// setcookie('wizyta',$czas,time()+3600);

// if (isset($_COOKIE["wizyta"])){
//     $ostatnia = $_COOKIE["wizyta"];
//     echo "ostatnia wizyta ".$ostatnia;
// }else{
//     echo "witamy po raz pierwszy";  
// }

if(!isset($_COOKIE["dane"]) && !isset($_POST['nazwa'])){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <form action="#" method="post">
            Podaj imie:
            <input type="text" name="nazwa" value="" size="35">
            <p><input type="submit" value="GO" name="wyslij"></p>
        </form>
    </body>
    <?php
}else{
    if(isset($_POST['nazwa'])){
        setcookie('dane',$_POST['nazwa'],time()+60);
        echo "wprowadzone dane";
    }else{
        echo "<p>Witaj ponownie ".$_COOKIE['dane']."</p>";
    }
}   
    ?>
    </html>

////////////////////////////////////////////////////
/* Update z 29-10-2024 */

<?php

if(!isset($_COOKIE['odwiedz'])){
    $odw = 1;
}else{
    $odw = intval($_COOKIE['odwiedz'])+1;  /* intval() = parseInt() */
}
setcookie('odwiedz',$odw, time()+60*60*24*365);

$czas = date("Y-m-d G:i:s");
setcookie('wizyta', $czas, time()+3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odwiedziny</title>
</head>
<body>
    <?php
        if(isset($_COOKIE['wizyta'])){
            $ostatnia = $_COOKIE['wizyta'];
            echo "Witamy ponownie!<br> Ostatnia raz odwiedziłeś nas: $ostatnia";
        }else{
            echo "Witamy na naszej stronie!";
        }
    ?>
    <p><strong>Uwaga: </strong> Potrzebne moze być odświeżenie strony.</p>
</body>
</html>


