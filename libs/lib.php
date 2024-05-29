<?php
date_default_timezone_set("America/Sao_Paulo"); // Timezone
ini_set("allow_url_fopen", 1);
ini_set("display_errors", 0);
error_reporting(0);
ini_set("track_errors", "0");

require_once("libs/config.php");
require_once("libs/language.php");

$val1 = explode(".", $value1);
$val2 = explode(".", $value2);
$val3 = explode(".", $value3);
$val4 = explode(".", $value4);
// END

// System Functions

function apiXtream($url_api) {  
    $ch = curl_init();  
    $timeout = 10;  
    curl_setopt($ch, CURLOPT_URL, $url_api);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);  
    $response = curl_exec($ch);  
    curl_close($ch);  
    return $response;
}

function generate_hash($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ' . rand(0, 99999);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

function limit_text($text, $limit) {
    $count = strlen($text);
    if ($count >= $limit) {      
        $text = substr($text, 0, strrpos(substr($text, 0, $limit), ' ')) . '';
        return $text;
    } else {
        return $text;
    }
}

function format_date($date) {  
    $date_parts = explode(" ", $date);
    $date_part = $date_parts[0];
    $date_elements = explode("-", $date_part);
    
    $formatted_date = $date_elements[2] . '/' . $date_elements[1] . '/' . $date_elements[0];
    
    return $formatted_date . ' ' . $date_parts[1];
}

function rating($ratings) {
    if ($ratings == 0) {
        $res = '<i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>';
    }
    if (($ratings >= 1) && ($ratings <= 1.99)) {
        $res = '<i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>';
    }
    if (($ratings >= 2) && ($ratings <= 2.99)) {
        $res = '<i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>';
    }
    if (($ratings >= 3) && ($ratings <= 3.99)) {
        $res = '<i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>';
    }
    if (($ratings >= 4) && ($ratings <= 4.99)) {
        $res = '<i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>';
    }
    if (($ratings >= 5)) {
        $res = '<i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>';
    }
    return $res;
}

if ($_GET['action'] == 'logout') {
    session_unset();
    session_destroy();
    setcookie('xuserm');
    setcookie('xpwdm');
    setcookie('xstatusm');
    setcookie('xconnm');
    setcookie('xtestem');
    setcookie('xdataexpm');
    header("Location: index.php");  
}

function encrypt_decrypt($action, $string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = '9991';
    $secret_iv = '1119';
    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - AES-256-CBC expects 16 bytes - otherwise you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ($action == 'encode') {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if ($action == 'decode') {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}
?>
