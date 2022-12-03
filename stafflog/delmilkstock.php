<?php
require '../connexion.php';
//print_r($_POST);
$liters = $_POST['liters'];


$queryupdate = "update milkStock set liters=liters-($liters) where id=1";
mysqli_query($connect,$queryupdate);
mysqli_close($connect);
header('Location: milkstock.php');
?>