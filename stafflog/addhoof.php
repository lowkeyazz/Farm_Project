<?php
require '../connexion.php';
//print_r($_POST);
$doneBy = $_POST['doneBy'];
$cowGroup = $_POST['cowGroup'];
$date = $_POST['date'];


$query = "insert into hoof values(null,'$doneBy','$cowGroup','$date')";
//echo $query;
mysqli_query($connect,$query);
mysqli_close($connect);
header('Location: hoofing.php')
?>
