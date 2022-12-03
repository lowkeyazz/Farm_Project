<?php
require '../connexion.php';
//print_r($_POST);
$foodItem = $_POST['foodItem'];
$remarks = $_POST['remarks'];
$quantity = $_POST['quantity'];
$date = $_POST['date'];
$time = $_POST['time'];

//$the_time = date('h:i A', strtotime($time));

$queryc="select count(*) from cow where 1";
$resultc = mysqli_query($connect,$queryc);
$cows=mysqli_fetch_row($resultc);

$querycd="select count(*) from cow where status='Dead'";
$resultcd = mysqli_query($connect,$querycd);
$cowsd=mysqli_fetch_row($resultc);

$querycs="select count(*) from cow where status='Sold'";
$resultcs = mysqli_query($connect,$querycs);
$cowss=mysqli_fetch_row($resultc);

$avcows=$cows[0]-($cowsd[0] + $cowss[0]);

$queryq="select * from foodStock where id=$foodItem";
$resultq = mysqli_query($connect,$queryq);
$qtt=mysqli_fetch_row($resultq);
if ($qtt[2]<=($avcows*$quantity)) {
    echo "NOT ENOUGH IN STOCK";
    return ;
}
else {


$query = "insert into feed values(null,'$foodItem','$remarks','$quantity','$date','$time')";
echo $query;
mysqli_query($connect,$query);
$queryupdate = "update foodStock set quantity=quantity-($quantity*$avcows) where id=$foodItem";
mysqli_query($connect,$queryupdate);
mysqli_close($connect);
header('Location: feed.php');
}
?>
