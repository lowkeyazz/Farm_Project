<?php
session_start();

if(time() - $_SESSION['LAT'] > 1) { 
    //unset($_SESSION['user'], $_SESSION['LAT']);
    header('Location: deconnexion.php');
} else {
    $_SESSION['LAT'] = time();
    header('Location: staffinfo.php');
}
?>