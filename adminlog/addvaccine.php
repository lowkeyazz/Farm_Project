<?php
require '../connexion.php';
//print_r($_POST);
$cowGroup = $_POST['cowGroup'];
$date = $_POST['date'];
$remarks = $_POST['remarks'];


$query = "insert into vaccine values(null,'$cowGroup','$date','$remarks')";
//echo $query;
mysqli_query($connect,$query);
mysqli_close($connect);
header('Location: vaccine.php')
?>