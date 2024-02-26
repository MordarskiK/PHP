<?php
    if(isset($_POST['opinia']) && $_POST['opinia'] != "" && $_POST['nick']!=""){
        $str = substr($_POST['opinia'], 0, 255);
        $str = trim(strip_tags($str));
        $nick = substr($_POST['nick'],0,255);
    if($str != ""){
        file_put_contents("./opinie.txt", "$nick\t".date("h:i a-d/m/Y")."\n$str\n", FILE_APPEND);
        header('Location:index.php');
    }}
?>