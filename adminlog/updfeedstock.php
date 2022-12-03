<?php
require '../connexion.php';
//print_r($_POST);
$foodItem = $_POST['foodItem'];
$quantity = $_POST['quantity'];
$id = $_POST['id'];
$oldq = $_POST['oldq'];

if(abs($quantity) >= $oldq && $quantity<=0){
    echo "INVALIDE QUANTITY VALUE";
    return ;
}
$queryupdate = "update foodStock set foodItem='$foodItem',quantity=quantity+$quantity where id=$id";
mysqli_query($connect,$queryupdate);
//echo $query;
mysqli_close($connect);
header('Location: feedstock.php')
?>