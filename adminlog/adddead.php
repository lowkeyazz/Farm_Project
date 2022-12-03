<?php
require '../connexion.php';
//print_r($_POST);
$cowNumber = $_POST['cowNumber'];
$date = $_POST['date'];
$causes = $_POST['causes'];

$querycc= "select status from cow where id=$cowNumber";
$rssn=mysqli_query($connect,$querycc);
$lkk=mysqli_fetch_row($rssn);
if($lkk[0]=='Dead'){
    echo "THE POOR COW IS ALREADY DEAD";
    return ;
}

if($lkk[0]=='Sold'){
    echo "YOU HAVE ALREADY SOLD THIS COW";
    return ;
}
$query = "insert into dead values(null,'$cowNumber','$date','$causes')";
mysqli_query($connect,$query);

$queryupdate = "update cow set status='Dead' where id=$cowNumber";
mysqli_query($connect,$queryupdate);

mysqli_close($connect);
header('Location: dead.php');

?>
