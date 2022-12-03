<?php
define('HOST','localhost');
define('USER','root');
define('PASS',"");
define('DB','farm');
$connect = mysqli_connect(HOST,USER,PASS,DB);
if ($connect == false) {
    echo "Pas de connection";
    exit();
}
?>