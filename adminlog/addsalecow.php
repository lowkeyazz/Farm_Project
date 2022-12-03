<?php
require '../connexion.php';
//print_r($_POST);
$cowNumber = $_POST['cowNumber'];
$amount = $_POST['amount'];
$customer = $_POST['customer'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$date = $_POST['date'];
$remarks = $_POST['remarks'];
//echo $_FILES['image']['type'];
$querycc= "select status from cow where id=$cowNumber";
$rssn=mysqli_query($connect,$querycc);
$lkk=mysqli_fetch_row($rssn);
if($lkk[0]=='Dead'){
    echo "YOU CAN'T SELL A DEAD COW";
    return ;
}

if($lkk[0]=='Sold'){
    echo "YOU HAVE ALREADY SOLD THIS COW";
    return ;
}
$query = "insert into salecow values(null,'$date','$cowNumber','$amount','$customer','$contact','$email','$remarks')";
//echo $query;
mysqli_query($connect,$query);

$queryupdate = "update cow set status='Sold' where id=$cowNumber";
mysqli_query($connect,$queryupdate);

mysqli_close($connect);
header('Location: salecow.php')
?>