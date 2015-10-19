<?php
namespace Home\Model;
use Think\Model;
class InfoModel extends Model{
	protected $trueTableName = "user_info";
	// 定义字段映射
	// protected $_map = array(
	// 		'newPass'=>'password'
	// 	);
	// 定义自动验证
	protected $_validate = array(
		array('mobile','require','手机号必须'),
		// array('mobile','','手机号己存在i',0,'unique',1),
		array('password','require','密码必须'),
		array('re_password','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
		array('carnumber','require','车牌号必须'),
		array('cartype','require','车型必须'),
		array('carcolor','require','车的颜色必须'),
		array('homeaddress','require','家庭住址必须'),
		array('workaddress','require','单位地址必须'),
		array('cartime','require','审车时间必须'),
		);

	// 定义自动完成
	protected $_auto = array(
		array('posttime','time', 3, 'function'),
		);
}