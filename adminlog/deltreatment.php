<?php
require '../connexion.php';
//print_r($_POST);

$cow = $_GET['cow'];

$deleted= $_GET['id'];
$querydel='delete from treatment where id='.$deleted;
mysqli_query($connect,$querydel);

mysqli_close($connect);
header('Location: treatment.php')
?>