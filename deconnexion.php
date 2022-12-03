<?php
session_start();
session_destroy();
header('Location: adminlog/cavs.php');
?>