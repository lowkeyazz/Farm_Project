<?php
require '../connexion.php';
//print_r($_POST);
$id = $_POST['id'];
$cowGroup = $_POST['cowGroup'];
$date = $_POST['date'];
$vet = $_POST['vet'];

$query = "update vaccine set cowGroup='$cowGroup',date='$date',vet='$vet' where id=$id";

//echo $query;
mysqli_query($connect,$query);
mysqli_close($connect);
header('Location: vaccine.php')
?>