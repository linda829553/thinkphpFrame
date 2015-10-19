<?php
namespace Admin\Model;
use Think\Model;
class NewsModel extends Model{
	// 定义自动验证
	protected $_validate = array(
		array(),
		);
	// 定义自动完成
	protected $_auto = array(
		array('post_time','time',3,'function'),
		);
}