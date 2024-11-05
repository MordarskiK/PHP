
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th{
            text-align:center;
            padding: 3px;
            border: solid 1px;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<?php
$sewer = "localhost";
$login = "root";
$haslo = "";
$baza = "klienci";

$do_bazy = mysqli_connect($sewer,$login,$haslo,$baza);

// if(mysqli_connect_errno()){
//     exit ("Błąd połączenia z serwerem: ".mysqli_connect_error()); //exit - koniec połączenia z bazą
// } else{
//     echo "Połączono z serwerem<br>";
// }
if(!$do_bazy){
    echo "błąd w zapytaniu";
    ?>
</body>
</html>
    <?php
    exit;
}else{
    $wynik = mysqli_query($do_bazy,'SELECT * FROM klienci');
    
    // var_dump($wynik);
    // print_r($wynik);
    // echo '<table><th>ID_Klienta</th><th>Imie</th><th>Nazwisko</th><th>Miejscowosc</th>';

    // foreach($wynik as $elem){
    //     echo "<tr><td>".$elem['ID_Klienta']."</td><td>".$elem['Imie']."</td><td>".$elem['Nazwisko']."</td><td>".$elem['Miejscowosc']."</td></tr>";
    // }

    // // while($wiersze = mysqli_fetch_row($wynik)){
    // //     echo "<tr><td>".$wiersze[0]."</td><td>".$wiersze[1]."</td><td>".$wiersze[2]."</td><td>".$wiersze[3]."</td></tr>";
    // // }   

    // echo "</table>";
 
    
    // $dodaj = mysqli_query($do_bazy, "Insert into klienci values('12','Anna','Lisek','Wadowice')");
    // $dodaj = mysqli_query($do_bazy, "Insert into klienci values('13','Karol','Lisek','Wadowice')");
    // $dodaj = mysqli_query($do_bazy, "Insert into klienci values('14','Michal','Kosz','Zabrze')");
    
    // mysqli_affected_rows - wykorzystane dane

    $ile = mysqli_affected_rows($do_bazy);

    echo "liczba rekordów dodana do bazy: ".$ile."<br>";

    mysqli_close($do_bazy);
}

?>
</body>
</html>

-------------------------------------------------------------------------------

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="name">
            Imie: <input type="text" name="name" id="name">
        </label>
        <label for="surname">
            Nazwisko: <input type="text" name="surname" id="surname">
        </label>
        <label for="city">
            Miejscowosc: <input type="text" name="city" id="city">
        </label>
        <input type="submit" value="Wyslij">
        <input type="reset" value="Reset">
    </form>
    <?php
        if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['city'])){
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $city = $_POST['city'];
            
            $conn = mysqli_connect('localhost','root','','klienci');
    
            $sql = mysqli_query($conn,"INSERT INTO klienci (`ID_Klienta`,`Imie`,`Nazwisko`,`Miejscowosc`) VALUES(NULL,'$name', '$surname', '$city')");
    
            mysqli_close($conn);

            echo 'dodane!';
        }else{
            echo "dodaj dane";
        }

    ?>
</body>
</html>
