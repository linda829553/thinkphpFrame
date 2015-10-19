<?php 
	function addTaskState($results)
	{
		// row is i  col is j
		for ($i=0; $i < count($results); $i++) { 
			foreach ($results[$i] as $key => $value) {
				$arr_results[$i][$key] = $results[$i][$key];
				if ($results[$i]["task_end_time"] < time() or $results[$i]["have_cars"]  >= $results[$i]["task_car_num"] ) {
					$arr_results[$i]["task_state"] = 0;
				} else {
					$arr_results[$i]["task_state"] = 1;
				}						
			}
		}
		return $arr_results;
	}


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