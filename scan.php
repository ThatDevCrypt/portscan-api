<?php
$array = array('nou', 'bruhtf', 'lolz');
$ports = array(21, 22, 23, 53, 80, 443);
$key = $_GET['key'];
$ip = $_GET['ip'];

if(!empty($key)) {
} else {
    die('Key is empty');
} if(!empty($ip)) {
} else {
    die('Ip is empty');
}

function portscan() {
    global $ip, $ports;
    foreach ($ports as $port) {
        $con = @fsockopen($ip, $port, $errno, $errstr, 2);

        if(is_resource($con)) {
            echo "$ip has $port open <br>";
            fclose($con);
        
        } else {
            echo "$ip has $port closed <br>";
        }
    
    }
}

if (in_array($key, $array)) {
    portscan();
} else {
    die('Invalid key');
}
?>