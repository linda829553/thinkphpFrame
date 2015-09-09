<?php
namespace Admin\Controller;
use Common\Controller\BaseController;
class AdminController extends BaseController{
	public function __construct(){
		parent::__construct();
		if (!session('?username')) {
			$this->redirect("Admin/login/index",'',0,'请先登录...');
		}else{
			// 菜单初始化
			$this->assign('exit_url', U('Admin/Index/exit_login'));
			$nav['task_post_url'] = U('Admin/Index/task_manage');
			$nav['member_manage'] = U('Admin/Index/index');
            $this->assign('nav', $nav);
		}
		
	}
}