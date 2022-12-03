<?php
function trace($action){
    $qui= $_SESSION['user'];
    $quand=date('Y-m-D H:i:s');
    $lieu= $_SERVER['REMOTE_ADDR'];
    $ch=$qui.'|'.$action.'|'.$quand.'|'.$lieu ;
    $f=fopen("trace.log","a+");
    fputs($f,$ch);
    fputs($f,"\r \n");
    fclose($f);
}
?>