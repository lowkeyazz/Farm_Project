<?php
require 'connexion.php';
$username = $_POST['username'];
$pass = md5($_POST['password']);
$querylog = "select count(*) from staff where username='".$username."' and password='".$pass."'";
$querydr = "select droit from staff where username='".$username."'";
$queryname = "select name from staff where username='".$username."'";
$queryimg = "select image from staff where username='".$username."'";
$resultlog= mysqli_query($connect,$querylog);
$rowwws=mysqli_fetch_array($resultlog);
$resultdr= mysqli_query($connect,$querydr);
$dr=mysqli_fetch_array($resultdr);
$resultnm= mysqli_query($connect,$queryname);
$name=mysqli_fetch_array($resultnm);
$resultimg= mysqli_query($connect,$queryimg);
$img=mysqli_fetch_array($resultimg);
if ($rowwws[0]==1 && $dr[0]=='AD') {
    session_start();
    $_SESSION['user']=$username;
    $_SESSION['droit'] = $dr[0];
    $_SESSION['name']=$name[0];
    $_SESSION['imagee']=$img[0];
    $_SESSION['LAT']=time();
    header('Location: adminlog/staffinfo.php');
} 
elseif ($rowwws[0]==1 && $dr[0]=='ST') {
    session_start();
    $_SESSION['user']=$username;
    $_SESSION['droit'] = $dr[0];
    $_SESSION['name']=$name[0];
    $_SESSION['imagee']=$img[0];
    $_SESSION['LAT']=time();
    header('Location: stafflog/staffinfo.php');
}
else {
    header('Location: index.php');
}

?>