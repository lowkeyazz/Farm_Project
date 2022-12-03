<?php
require '../connexion.php';
//print_r($_POST);
$id = $_POST['id'];
$cowNumber = $_POST['cowNumber'];
$description = $_POST['description'];
$vet = $_POST['vet'];
$datestart = $_POST['datestart'];
$dateend = $_POST['dateend'];
$oldcow = $_POST['oldcow'];
if($dateend != ''){
if ($dateend <= $datestart) {
    echo "END DATE MUST BE HIGHER THAN START DATE";
    return ;
}
else {
$query = "update treatment set cowNumber='$cowNumber',description='$description',vet='$vet',datestart='$datestart',dateend='$dateend' where id=$id";
mysqli_query($connect,$query);

$queryupdate = "update cow set status='Sick' where id=$cowNumber";
mysqli_query($connect,$queryupdate);
$queryupdatec = "update cow set status='Healthy' where id=$oldcow";
mysqli_query($connect,$queryupdatec);

mysqli_close($connect);
header('Location: treatment.php');
}
}
else {
$query = "update treatment set cowNumber='$cowNumber',description='$description',vet='$vet',datestart='$datestart',dateend='$dateend' where id=$id";
mysqli_query($connect,$query);
mysqli_close($connect);
header('Location: treatment.php');
}

?>