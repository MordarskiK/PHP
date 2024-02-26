<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Moja strona WWW</title>
    </head>
    <body>
        <div>
            <strong>Wyraź swoją opinię:</strong><br>
            (maksymalnie 255 znaków)
            <br>
        </div>
        <form method="post" action="http://localhost/dodaj_opinie.php">
            <div>
            <textarea rows="5" cols="20" name="opinia"></textarea>
            <br>
            Nick: <input type="text" name="nick">
            <br>
            <input type="submit" value="Wyślij">
            </div>
        </form>
        <p>Dotychczasowe opinie:</p>
        <div>
            <?php
                $str = "";
                if(file_exists("./opinie.txt")){
                    $str = file_get_contents('./opinie.txt');
                    $str = strip_tags($str);
                    $str = nl2br($str);
                }

                if($str != ""){
                    echo $str;
                }

                else{
                    echo "<p>Brak opinii. Możesz dodać pierwszą.</p>";
                }
                ?>
            </div>
    </body>
</html>
