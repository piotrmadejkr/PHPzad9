<?php include('views/settings.php'); ?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
    <title></title>
</head>
<body>
<form method='Post' action='set.php'>
<p>podaj imie<p>
<input type="text" name='imie' placholder="podaj imie">
<p> podaj nazwisko</p>
<input type="text" name='nazwisko' placeholder="podaj naziwsko">
<p>podaj numer stolika</p>
<input type="number" name='stolik' placeholder="np 1">
<p>podaj numer telefonu</p>
<input type="number" name='telefon' placeholder="np 555 333 444">
<input type='submit' name="wyslij" value='wyslij!'>
</form>

<form method="post" action="set.php">
    <input type="submit" name="destroy" value="usun dane">
</form>

<table class="table table-bordered table-hover">
<h2>Lista gosci</h2>
<tr>
    <td>Lp</td>
    <td>imie</td>
    <td>nazwisko</td>
    <td>Nr stolika</td>
    <td>N telefonu</td> 
</tr>
<?php
$G = 1;
foreach ($Goscie as $Gosc) {
echo '<tr>';
   echo '<td>'.($G++).'</td>';
   echo '<td>'.$Gosc['imie'].'</td>';
   echo '<td>'.$Gosc['Nazwisko'].'</td>';
   echo '<td>'.$Gosc['Stolik'].'</td>';
   echo '<td>'.$Gosc['telefon'].'</td>';
echo '</tr>';
}




?>

</table>

<?php 

komunikat($_GET['info']);

?>



   
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.waterwheelCarousel.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>





