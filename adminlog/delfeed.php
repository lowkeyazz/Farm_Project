<?php
require '../connexion.php';
$deleted= $_GET['id'];
$quantity=$_GET['qtt'];
$foodItem=$_GET['fitem'];
$querydel='delete from feed where id='.$deleted;
mysqli_query($connect,$querydel);
$queryc="select count(*) from cow where 1";
$resultc = mysqli_query($connect,$queryc);
$cows=mysqli_fetch_row($resultc);

$queryupdate = "update foodStock set quantity=quantity+($quantity*$cows[0]) where id=$foodItem";
mysqli_query($connect,$queryupdate);
mysqli_close($connect);
header('Location: feed.php')

?>