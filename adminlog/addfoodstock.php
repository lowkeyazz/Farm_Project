<?php
require '../connexion.php';
//print_r($_POST);
$foodItem = $_POST['foodItem'];
$quantity = $_POST['quantity'];

$query = "insert into foodStock values(null,'$foodItem','$quantity')";
//echo $query;
mysqli_query($connect,$query);
mysqli_close($connect);
header('Location: feedstock.php')
?>