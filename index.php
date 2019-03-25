<?php?
$server = "192.168.0.52";
$connectionifo = array("Database"=>"datos","UID"=>"tics","PWD"=>"tic2019");
$conn =  sqlsrv_connect($server,$connectionifo);
if($conn){
    echo "Conexión establecida.<br />";
}else{
    echo "Conexión no se pudo establecer.<br />";
    die( print_r( sqlsrv_errors(), true));
}
