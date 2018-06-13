<?php
include('views/settings.php');

// tutaj robimy myk: zamiast dodawac $zmienne - dodajemy do linka inetresujacego nas header(location) okreslona zmienna GET recznie - dopisujac ja do linka tutaj np. ?info=dodalismy, potem mozemy ja wyswietlic za pomoca $_GET['dodalismy] np echp $_GET['info']  echo 

if (isset($_POST['wyslij'])){
    if ($_POST['imie'] == '' || $_POST['nazwisko'] == '' || $_POST['stolik'] == '' ||$_POST['telefon']== '') {
        header('location: index.php?info=uzupelnij');
        exit();
    }    
        

    $Goscie [] = ['imie' => $_POST['imie'], 'Nazwisko' => $_POST['nazwisko'], 'Stolik'=> $_POST['stolik'], 'telefon' => $_POST['telefon']];
    $_SESSION['sesion'] = $Goscie;  
    header('Location: index.php?info=dodalismy');
  
   
}

if (isset($_POST['destroy'])){
    session_destroy();
    header('Location: index.php?info=wyczyszczono');
}







exit();

?>