<?php
include_once("connect.php");
$name = $_POST["name"];
$carnumber = $_POST["carnumber"];
$cartype = $_POST["cartype"];
$carcolor = $_POST["carcolor"];
$mobile = $_POST["mobile"];
$homeaddress = $_POST["homeaddress"];
$workaddress = $_POST["workaddress"];
$cartime = $_POST["cartime"];
$posttime = time();
$card_num = date('ymdHis',$posttime);

$sql = "INSERT INTO user_info (card_num, name, carnumber, cartype, carcolor, mobile, homeaddress, workaddress, cartime, posttime)";
$sql .= " VALUES ('$card_num', '$name', '$carnumber', '$cartype', '$carcolor', '$mobile', '$homeaddress', '$workaddress', '$cartime', $posttime)";
// echo $sql;
if(mysql_query($sql)){
	echo "1";
	$userid = encrypt("5hn5SY23tiaUqpzYrp", mysql_insert_id());
	setcookie("userid", $userid,time()+94608000,"/");
}else{

	echo "0";
}
mysql_close($link);

// 加密
function encrypt($key, $plain_text) {  
    $plain_text = trim($plain_text);  
    $iv = substr(md5($key), 0,mcrypt_get_iv_size (MCRYPT_CAST_256,MCRYPT_MODE_CFB));  
    $c_t = mcrypt_cfb (MCRYPT_CAST_256, $key, $plain_text, MCRYPT_ENCRYPT, $iv);  
    return trim(chop(base64_encode($c_t)));  
} 

function decrypt($key, $c_t) {  
    $c_t = trim(chop(base64_decode($c_t)));  
    $iv = substr(md5($key), 0,mcrypt_get_iv_size (MCRYPT_CAST_256,MCRYPT_MODE_CFB));  
    $p_t = mcrypt_cfb (MCRYPT_CAST_256, $key, $c_t, MCRYPT_DECRYPT, $iv);  
    return trim(chop($p_t));  
}  
?>