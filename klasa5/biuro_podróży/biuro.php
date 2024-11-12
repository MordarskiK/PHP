<?php
$conn = mysqli_connect('localhost','root','','podroze');

$sql = mysqli_query($conn,"SELECT zdjecia.nazwaPliku, zdjecia.podpis FROM `zdjecia` 
                    ORDER BY zdjecia.podpis ASC");

while($wiersz = mysqli_fetch_array($sql)){
    echo "<img src='$wiersz[0]' alt='$wiersz[1]' title='$wiersz[1]'>";
}


$sql2 = mysqli_query($conn, "SELECT wycieczki.cel, wycieczki.dataWyjazdu FROM wycieczki
                            WHERE wycieczki.dostepna = 0;");

echo "<ol type='I'>";
while($wiersz = mysqli_fetch_array($sql2)){
    echo "<li>Dnia $wiersz[1] pojechaliśmy do $wiersz[0]";
}
echo "</ol>";

mysqli_close($conn);
?>