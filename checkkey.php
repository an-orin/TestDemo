<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
$today = date("d-m-y");
$ip_2 = file_get_contents("https://api64.ipify.org/");
$keyfree = "keyvip24h_".substr(md5(gzencode($today)), 0 , 8);
$long_url = "https://server.shopdragonx.com/getkey/?key=".$keyfree;
$api_token = '64d3af5bf7254d3e5f3fbc65';
$api_url = "https://link4m.co/api-shorten/v2?api={$api_token}&url={$long_url}";
if (isset($_POST['data'])){
    if (decryption($_POST['data']) == "GetLink".date("d/m")){
        $result = @json_decode(file_get_contents($api_url),TRUE);
        die(json_encode(array("shortenedUrl" => $result["shortenedUrl"])));
    } else if (decryption($_POST['data']) == "CheckKey".date("d/m") && isset($_POST['key'])){
        die(json_encode(check_key(decryption($_POST['key']), $keyfree)));
    } else {
        die("dump");
    }
}
function check_key($key, $keyfree = false){
    $ip = file_get_contents("https://kiemtraip.com/raw.php");
    $status = json_decode(file_get_contents("https://keyvip24h.dev/api/checkkey.php?key=".$key."&ip=".$ip), true);
    if ($key == $keyfree){
        $tennguoimua = "KEY FREE";
        $ngay1 = date('d-m-Y');
        $ngay2 = date('d-m-Y', strtotime('tomorrow'));
        return array("status" => "success", "name" => $tennguoimua, "start" => $ngay1, "end" => $ngay2, "device" => 1);
    } else if ($status["status"] == "success"){
        $tennguoimua = $status['name'];
        $ngay1 = $status['start'];
        $ngay2 = $status['end'];
        $device = $status['device'];
        return array("status" => "success", "name" => $tennguoimua, "start" => $ngay1, "end" => $ngay2, "device" => $device);
    } else {
        return array("status" => "error", "messenger" => $status["messenger"]);
    }
}
function decryption($encryptedData){
    return hex2bin(hex2bin(hex2bin(hex2bin(hex2bin(hex2bin(hex2bin(hex2bin(hex2bin(hex2bin(hex2bin(hex2bin(gzdecode(hex2bin($encryptedData))))))))))))));
}