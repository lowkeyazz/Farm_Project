<?php
require '../connexion.php';
$deleted= $_GET['id'];
$querydel='delete from insamination where id='.$deleted;
mysqli_query($connect,$querydel);
mysqli_close($connect);
header('Location: insamination.php')

?>