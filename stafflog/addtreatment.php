<?php
require '../connexion.php';
//print_r($_POST);
$cowNumber = $_POST['cowNumber'];
$description = $_POST['description'];
$vet = $_POST['vet'];
$datestart = $_POST['datestart'];


$query = "insert into treatment values(null,'$cowNumber','$description','$vet','$datestart','')";
mysqli_query($connect,$query);

$queryupdate = "update cow set status='Sick' where id=$cowNumber";
mysqli_query($connect,$queryupdate);
mysqli_close($connect);
header('Location: treatment.php');

?>
