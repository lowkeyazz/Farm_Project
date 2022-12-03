<?php
require '../connexion.php';
//print_r($_POST);
$id = $_POST['id'];
$insNumber = $_POST['insNumber'];
$gender = $_POST['gender'];
$date = $_POST['date'];
//$image = $_POST['image'];
$vet = $_POST['vet'];
//echo $_FILES['image']['type'];
/*
if ($_FILES['image']['size']> 400000) {
    echo 'ERROR 404';
    return ;
} else if($_FILES['image']['type'] != 'image/jpeg') {
    echo 'ERROR 505';
    return ;
} else {
    $path=uniqid();
    move_uploaded_file($_FILES['image']['tmp_name'],'imagecf/'.$path.'.jpg');
}
*/

$queryn= "select cowNumber,bullNumber from insamination where id=$insNumber";
$rss=mysqli_query($connect,$queryn);
$lk=mysqli_fetch_row($rss);

$querycc= "select status from cow where id=$lk[0]";
$rssn=mysqli_query($connect,$querycc);
$lkk=mysqli_fetch_row($rssn);

if($lkk[0]=='Dead'){
    echo "THE POOR COW IS DEAD SHE CAN'T GIVE BIRTH";
    return ;
}
if($lkk[0]=='Sold'){
    echo "YOU HAVE ALREADY SOLD THIS COW";
    return ;
}
$query = "update calff set gender='$gender',insNumber='$insNumber',cowNumber='$lk[0]',bullNumber='$lk[1]',date='$date',vet='$vet' where id=$id";

echo $query;

mysqli_query($connect,$query);
mysqli_close($connect);
header('Location: cavs.php')
?>
