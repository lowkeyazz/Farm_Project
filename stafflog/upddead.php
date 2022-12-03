<?php
require '../connexion.php';
//print_r($_POST);
$oldcow=$_POST['oldcow'];
$id = $_POST['id'];
$cowNumber = $_POST['cowNumber'];
$date = $_POST['date'];
$causes = $_POST['causes'];

$query = "update dead set cowNumber='$cowNumber',date='$date',causes='$causes' where id=$id";
mysqli_query($connect,$query);

$queryupdate = "update cow set status='Healthy' where id=$oldcow";
mysqli_query($connect,$queryupdate);

$queryupdate = "update cow set status='Dead' where id=$cowNumber";
mysqli_query($connect,$queryupdate);

mysqli_close($connect);
header('Location: dead.php');

?>