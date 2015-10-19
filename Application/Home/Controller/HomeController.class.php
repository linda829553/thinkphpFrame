<?php
namespace Home\Controller;
use Think\Controller;
class HomeController extends Controller{
	public function _initialize(){
		// exit("initialize");
		$cookie_uid = cookie('userid946');
		if (!empty($cookie_uid)) {
			// 登录标志
			$this->assign('logined','1');
			// 己经登录显示用户名
			// 从cookie中解密用户id
			$cookie_uid = cookie('userid946');
			$userid = decrypt("5hn5SY23tiaUqpzYrp", $cookie_uid);
			// 根据用户id查找用户名
			$User = M("user_info");
			$result = $User->Field('name')->find($userid);
			$this->assign('username', $result['name']);
		}else{
			$this->assign('logined','0');
		}
		
	}

	public function logout()
	{
		// cookie("userid946","",time()-3600,"/");
		cookie('userid946',null);
		$this->redirect('Index/index');
	}
}