<?php
require '../connexion.php';
//print_r($_POST);
$id = $_POST['id'];
$cowNumber = $_POST['cowNumber'];
$liters = $_POST['liters'];
$oldliters = $_POST['oldliters'];
$date = $_POST['date'];
$time = $_POST['time'];
//echo $_FILES['image']['type'];
$lits=$liters - $oldliters;

$query = "update milking set cowNumber='$cowNumber',date='$date',liters='$liters',time='$time' where id=$id";

//echo $query;
mysqli_query($connect,$query);

$queryupdate = "update milkStock set liters=liters+($lits) where id=1";
mysqli_query($connect,$queryupdate);

mysqli_close($connect);
header('Location: milking.php')
?>