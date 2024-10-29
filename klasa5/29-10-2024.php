<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form>*{
            display: block;
        }
    </style>
</head>
<body>
    <form action="wynik.php" method="post">
        <label for="name">
            Imie:<input type="text" name="name">
        </label>
        <label for="who">
            uczeń: <input type="radio" name="who" value="uczniem">
            rodzic: <input type="radio" name="who" value="rodzicem">
            nauczyciel: <input type="radio" name="who" value="naucycielem">
        </label>
        <select name="school">
            <option value="szkole podstawowej">szkoła podstawowa</option>
            <option value="szkole średniej">szkoła średnia</option>
            <option value="studiach wyższych">studia wyższe</option>
        </select>
        <label for="age">
            pełnoletni: <input type="checkbox" name="age">
        </label>
        <button type="submit">Dalej</button>
    </form>
</body>
</html>

/////////////////////////////////////////////////////

<?php

$name = $_POST["name"];
$who = $_POST["who"];
$school = $_POST["school"];
if(isset($_POST["age"])){
    $age = $_POST["age"];
}else{
    $age = false;
}

echo "Wtaj $name,<br>Jesteś $who ";
if($school == "studiach wyższych"){
    echo "na";
}else{
    echo "w";
}
echo " $school,<br>Z formularza wynika, że jesteś ";
if($age == true){
    echo "pełnoletni";
}else{
    echo "niepełnoletni";
}
?>
