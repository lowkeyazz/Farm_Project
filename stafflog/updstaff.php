<?php
require '../connexion.php';
//print_r($_POST);
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$designation = $_POST['designation'];
$username = $_POST['username'];
//$image = $_POST['image'];
$password = $_POST['password'];
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
    move_uploaded_file($_FILES['image']['tmp_name'],'image/'.$path.'.jpg');
}
*/
$query = "update staff set name='$name',email='$email',number='$number',designation='$designation',username='$username',password=md5('$password') where id=$id";
//echo $query;
mysqli_query($connect,$query);
mysqli_close($connect);
header('Location: staffinfo.php')
?>
