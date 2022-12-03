<?php
require '../connexion.php';
//print_r($_POST);
$liters = $_GET['liters'];

$deleted= $_GET['id'];
$querydel='delete from milking where id='.$deleted;
mysqli_query($connect,$querydel);
$queryupdate = "update milkStock set liters=liters-($liters) where id=1";
mysqli_query($connect,$queryupdate);

mysqli_close($connect);
header('Location: milking.php')
?>