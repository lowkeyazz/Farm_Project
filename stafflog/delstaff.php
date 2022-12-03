<?php
require '../connexion.php';
$deleted= $_GET['id'];
$querydel='delete from staff where id='.$deleted;
mysqli_query($connect,$querydel);
mysqli_close($connect);
header('Location: staffinfo.php')

?>