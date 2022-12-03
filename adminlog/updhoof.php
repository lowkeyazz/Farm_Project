<?php
require '../connexion.php';
//print_r($_POST);
$id=$_POST['id'];
$doneBy = $_POST['doneBy'];
$cowGroup = $_POST['cowGroup'];
$date = $_POST['date'];

$query = "update hoof set doneBy='$doneBy',cowGroup='$cowGroup',date='$date' where id=$id";

//echo $query;
mysqli_query($connect,$query);
mysqli_close($connect);
header('Location: hoofing.php')
?>
