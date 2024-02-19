<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Moja strona WWW</title>
    </head>
    <body>
        <form method="get"
        action="http://localhost/index.php">
            <div>
                num1:<input type="number" name="num1">
                <br>
                num2:<input type="number" name="num2">
                <input type="submit">
                <br>  
                <input type="radio" name="radio1" value="suma">
                suma
                <br>
                <input type="radio" name="radio1" value="roznica">
                różnica
                <br>
                <input type="radio" name="radio1" value="iloczyn">
                iloczyn
                <br>
                <input type="radio" name="radio1" value="iloraz">
                iloraz
                <br>
            </div>
            <p>
            <?php
                if(!isset($_GET['radio1'])){
                echo "Proszę zaznaczyć jedną z opcji!";
                }
                else{
                    switch ($_GET['radio1']){
                        case 'suma':
                            $suma = $_GET['num1']+$_GET['num2'];
                            echo "{$_GET['num1']}+{$_GET['num2']}={$suma}";
                        case 'roznica':

                        case 'iloczyn':

                        case 'iloraz':
                    }
                }
            ?>
        </p>
        </form>
    </body>
</html>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Moja strona WWW</title>
    </head>
    <body>
        <form enctype = "multipart/form-data"
            action = "index.php"
            method = "post">
            <div>
                Nazwa pliku:
                <input type="hidden" name="max_file_size" value="20480">
                <input type="file" name="plik1" size="30">
                <input type="submit" name="wyslij" value="Wyślij plik">
            </div>
        </form>
        <p>
            <?php
                if(isset($_FILES['plik1']['name'])){
                    echo "Nazwa pliku: {$_FILES['plik1']['name']}";
                    echo "<br>";
                    } else {
                    echo "Brak danych";
                    }
                $uploaddir = './';

                if($_FILES['plik1']['error'] == UPLOAD_ERR_OK){
                $new_name = $uploaddir.$_FILES['plik1']['name'];
                $temp_name = $_FILES['plik1']['tmp_name'];
                if(move_uploaded_file($temp_name, $new_name)){
                echo "Plik został załadowany.";
                echo "<br>";
                echo "odnosnik:"; 
                echo "<a href='http://localhost/{$_FILES['plik1']['name']}'>localhost/{$_FILES['plik1']['name']}</a>";
                }
                else{
                echo "Nie udało się załadować pliku.";
                }
                }
                else{
                echo "Wystąpił błąd: ";
                switch($_FILES['plik1']['error']){
                case UPLOAD_ERR_INI_SIZE :
                case UPLOAD_ERR_FORM_SIZE :
                echo "Przekroczony maksymalny rozmiar pliku!";
                break;
                case UPLOAD_ERR_PARTIAL :
                echo "Odebrano tylko część pliku!";
                break;
                case UPLOAD_ERR_NO_FILE :
                echo "Plik nie został pobrany!";
                break;
                case UPLOAD_ERR_NO_TMP_DIR:
                echo "Brak dostępu do katalogu tymczasowego.";
                break;
                case UPLOAD_ERR_CANT_WRITE:
                echo "Nie udało się zapisać pliku na dysku serwera.";
                break;
                case UPLOAD_ERR_EXTENSION:
                echo "Ładowanie pliku przerwane przez rozszerzenie PHP.";
                break;
                default :
                echo "Nieznany typ błędu!";
                }
                }
            ?>
        </p>
    </body>
</html>
