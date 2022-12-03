<?php
require '../connexion.php';
$deleted= $_GET['id'];
$querydel='delete from cow where id='.$deleted;
mysqli_query($connect,$querydel);
mysqli_close($connect);
header('Location: cowinfo.php')

?>