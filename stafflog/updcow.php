<?php
require '../connexion.php';
//print_r($_POST);
$id = $_POST['id'];
$cowType = $_POST['cowType'];
$dateOfBirth = $_POST['dateOfBirth'];
//$image = $_POST['image'];
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
    move_uploaded_file($_FILES['image']['tmp_name'],'imagec/'.$path.'.jpg');
}
*/
$query = "update cow set cowType='$cowType',dateOfBirth='$dateOfBirth' where id=$id";

//echo $query;
mysqli_query($connect,$query);
mysqli_close($connect);
header('Location: cowinfo.php')
?>