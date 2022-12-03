<?php
require '../connexion.php';
//print_r($_POST);
$cowNumber = $_POST['cowNumber'];
$bullNumber = $_POST['bullNumber'];
$date = $_POST['date'];
$vet = $_POST['vet'];

$queryn= "select status from cow where id=$cowNumber";
$rss=mysqli_query($connect,$queryn);
$lk=mysqli_fetch_row($rss);

if($lk[0]=='Dead'){
    echo "THE POOR COW IS DEAD SHE CAN'T GET PREGNANT";
    return ;
}

if($lk[0]=='Sold'){
    echo "YOU HAVE ALREADY SOLD THIS COW";
    return ;
}

$query = "insert into insamination values(null,'$cowNumber','$bullNumber','$date','$vet')";
//echo $query;
mysqli_query($connect,$query);
mysqli_close($connect);
header('Location: insamination.php')
?>
