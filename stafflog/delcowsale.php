<?php
require '../connexion.php';
//print_r($_POST);

$cow = $_GET['cow'];

$deleted= $_GET['id'];
$querydel='delete from salecow where id='.$deleted;
mysqli_query($connect,$querydel);
$queryupdate = "update cow set status='Healthy' where id=$cow";
mysqli_query($connect,$queryupdate);

mysqli_close($connect);
header('Location: salecow.php')
?>