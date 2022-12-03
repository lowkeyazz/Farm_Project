<?php
require '../connexion.php';
//print_r($_POST);
$customer = $_POST['customer'];
$price = $_POST['price'];
$liters = $_POST['liters'];
$date = $_POST['date'];



$queryq="select * from milkStock where id=1";
$resultq = mysqli_query($connect,$queryq);
$qtt=mysqli_fetch_row($resultq);
if ($qtt[1]<=($liters)) {
    echo "NOT ENOUGH MILK IN STOCK";
    return ;
}
else {

$total = $liters*$price;
$query = "insert into salemilk values(null,'$customer','$liters','$price','$total','$date')";
echo $query;
mysqli_query($connect,$query);
$queryupdate = "update milkStock set liters=liters-$liters where id=1";
mysqli_query($connect,$queryupdate);
mysqli_close($connect);
header('Location: salemilk.php');
}
?>