<?php
$server = 'localhost';
$user = 'gosc';
$pass = 'gosc';
$database = 'biuro_podrozy';

$conn = mysqli_connect($server,$user,$pass,$database);

if(!$conn){
    echo "Nie ma polaczenia z baza";
}else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biuro podróży</title>
    <link rel="stylesheet" href="style.css">
    <script src="main.js" defer></script>
</head>
<body>
    <nav>
        <ul>
            <li><a href="main_page.php">Strona główna</a></li>
            <li><a href="offers.php">Oferty</a></li>
            <li><a href="basket.php">Koszyk</a></li>
            <li><a href="register.php">Rejestracja</a></li>
            <li><a href="login.php">Logowanie</a></li>
        </ul>
    </nav>
    <main>
        <div class="search"> 
            <label for="destination" id="destination_label">
                Gdzie
                <input type="text" name="destination" id="destination_input" list="country">
                <datalist id="country">
                    <?php
                        $sql = mysqli_query($conn,"SELECT nazwa FROM kraje;");
                        if(!$sql){
                            echo "zapytanie nie dziala";
                        }
                        while($kraje = mysqli_fetch_array($sql)){
                            echo "<option value='".$kraje['nazwa']."'>".$kraje['nazwa']."</option>";
                        }
                    ?>
                </datalist>
            </label>
            <label for="when">
                Kiedy
                <input type="date" name="when" id="when">
            </label>
            <label for="people">
                Ile osób
                <input type="number" name="people" id="people">
            </label>
        </div>
        <div class="offers">

        </div>
    </main>
    <footer>
        <div class="contacts"></div>
    </footer>
</body>
</html>

<?php
}
?>