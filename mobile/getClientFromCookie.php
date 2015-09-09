<?php
	if(isset($_COOKIE["userid"])){
		$userid = decrypt("5hn5SY23tiaUqpzYrp", $_COOKIE["userid"]);
		echo $userid;
	}else{
		echo "0";
	}

	function decrypt($key, $c_t) {  
	    $c_t = trim(chop(base64_decode($c_t)));  
	    $iv = substr(md5($key), 0,mcrypt_get_iv_size (MCRYPT_CAST_256,MCRYPT_MODE_CFB));  
	    $p_t = mcrypt_cfb (MCRYPT_CAST_256, $key, $c_t, MCRYPT_DECRYPT, $iv);  
	    return trim(chop($p_t));  
	}  
?>