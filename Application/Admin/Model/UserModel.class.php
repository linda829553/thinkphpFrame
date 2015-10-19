<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model{
	// 定义字段映射
	protected $_map = array(
			'newPass'=>'password'
		);
	// 定义自动验证
	protected $_validate = array(
		array(),
		);

	// 定义自动完成
	protected $_auto = array(
		array('createtime','time', 3, 'function'),
		array('password','md5', 3, 'function'),
		array('ip','get_client_ip', 3, 'function')
		);
}