<?php
require '../connexion.php';
//print_r($_POST);
$cowNumber = $_POST['cowNumber'];
$liters = $_POST['liters'];
$date = $_POST['date'];
$time = $_POST['time'];
//echo $_FILES['image']['type'];
$querycc= "select status from cow where id=$cowNumber";
$rssn=mysqli_query($connect,$querycc);
$lkk=mysqli_fetch_row($rssn);
if($lkk[0]=='Dead'){
    echo "YOU CAN'T MILK A DEAD COW";
    return ;
}

if($lkk[0]=='Sold'){
    echo "YOU HAVE ALREADY SOLD THIS COW";
    return ;
}
$query = "insert into milking values(null,'$cowNumber','$date','$liters','$time')";
//echo $query;
mysqli_query($connect,$query);

$queryupdate = "update milkStock set liters=liters+($liters) where id=1";
mysqli_query($connect,$queryupdate);

mysqli_close($connect);
header('Location: milking.php')
?>