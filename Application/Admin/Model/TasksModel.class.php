<?php
namespace Admin\Model;
use Think\Model;
class TasksModel extends Model{
	// 定义自动验证
	protected $_validate = array(
		array(),
		);
	// 定义自动完成
	protected $_auto = array(
		array('task_posttime','time', 1, 'function'),
		);
}