<?php
session_start();
error_reporting(0);
$Goscie = array();
$Goscie=$_SESSION['sesion'];

function komunikat($x) {
    if ($x == 'wyczyszczono') {
        echo 'tabelka wyczyszczona';
    }
    else if ($x== 'dodalismy'){
        echo 'dodano nowego klienta';
    }
    else if($x == 'uzupelnij') {
        echo 'wypełnij wszystkie pola';
    }
    else {
        echo 'wpisz dane';
    }
}



?>