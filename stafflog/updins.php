<?php
require '../connexion.php';
//print_r($_POST);
$id = $_POST['id'];
$cowNumber = $_POST['cowNumber'];
$bullNumber = $_POST['bullNumber'];
$date = $_POST['date'];
$vet = $_POST['vet'];

$query = "update insamination set cowNumber='$cowNumber',bullNumber='$bullNumber',date='$date',vet='$vet' where id=$id";

$queryn= "select id from calf where insNumber=$id";
$rss=mysqli_query($connect,$queryn);
$lk=mysqli_fetch_row($rss);

if ($lk[0]==$id) {
    $querycf = "update calf set cowNumber='$cowNumber',bullNumber='$bullNumber' where id=$id";

//echo $query;
mysqli_query($connect,$querycf);
}


mysqli_query($connect,$query);
mysqli_close($connect);
header('Location: insamination.php')
?>
