<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

    	echo "进入管理后台: <a href='".U('Admin/Login/index')."'>".U('Admin/Login/index')."</a>";
    }
}