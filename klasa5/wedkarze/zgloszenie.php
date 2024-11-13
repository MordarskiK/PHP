<?php
$conn = mysqli_connect('localhost','root','','wedkowanie');

if($conn){
    if(isset($_POST['lowisko']) && isset($_POST['date']) && isset($_POST['sedzia'])){
        $lowisko = $_POST['lowisko'];
        $date = $_POST['date'];
        $sedzia = $_POST['sedzia'];
        $sql = mysqli_query($conn,"INSERT INTO zawody_wedkarskie(Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia) VALUES (0,$lowisko,'$date','$sedzia');");
        if($sql){
            echo "wszystko poszło";
        }else{
            echo "zapytanie nie dziala";
        }
    }else{
        echo "nie ma podanych danych";
    }
}else{
    echo "error: nie połączono z bazą";
    exit;
}

mysqli_close($conn);

?>