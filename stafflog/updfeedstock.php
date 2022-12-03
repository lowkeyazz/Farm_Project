<?php
require '../connexion.php';
//print_r($_POST);
$foodItem = $_POST['foodItem'];
$quantity = $_POST['quantity'];
$id = $_POST['id'];
$queryupdate = "update foodStock set foodItem='$foodItem',quantity='$quantity' where id=$id";
mysqli_query($connect,$queryupdate);
//echo $query;
mysqli_close($connect);
header('Location: feedstock.php')
?>