<?php
require '../connexion.php';
//print_r($_POST);
$id = $_POST['id'];
$customer = $_POST['customer'];
$price = $_POST['price'];
$liters = $_POST['liters'];
$oldliters = $_POST['oldliters'];
$date = $_POST['date'];



$queryq="select * from milkStock where id=1";
$resultq = mysqli_query($connect,$queryq);
$qtt=mysqli_fetch_row($resultq);

$qq=$liters - $oldliters;
if ($qtt[1]<=$qq && $qq>=0) {
    echo "NOT ENOUGH MILK IN STOCK";
    return ;
}
else {

$total = $liters*$price;
$query = "update salemilk set customer='$customer',liters='$liters',price='$price',total='$total',date='$date' where id=$id";
echo $query;
mysqli_query($connect,$query);
$queryupdate = "update milkStock set liters=liters-$qq where id=1";
mysqli_query($connect,$queryupdate);
mysqli_close($connect);
header('Location: salemilk.php');
}
?>