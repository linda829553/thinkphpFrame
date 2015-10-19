<?php
namespace Admin\Model;
use Think\Model;
class InfoModel extends Model{
	protected $trueTableName = "user_info";
	// 定义字段映射
	// protected $_map = array(
	// 		'newPass'=>'password'
	// 	);
	// 定义自动验证
	// protected $_validate = array(
	// 	array(),
	// 	);

	// 定义自动完成
	protected $_auto = array(
		array('posttime','strtotime', 3, 'function'),
		);
}