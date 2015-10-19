<?php
namespace Home\Controller;
class UserController extends HomeController {

    // public function __construct(){
    //     parent::__construct();
    // }

    public function _initailize($value='')
    {
        parent::_initailize;
        header("Content-Type:text/html;charset=utf-8");
    }
    // 显示用户登录注册页面
    public function signup()
    {
        $Tasks = M("tasks");
    
        $topTasks = $Tasks->order("task_posttime desc")->limit(10)->select();
        foreach ($topTasks as $key => $value) {
           if ($topTasks[$key]['task_end_time'] < time() or $topTasks[$key]['have_cars'] >= $topTasks[$key]['task_car_num']) {
                $topTasks[$key]['task_state'] = 0;
            } else {
                $topTasks[$key]['task_state'] = 1;
            }
        }
        $this->assign("topTasks", $topTasks);

        $this->display();
    }


    // 用户登录验证
    public function login()
    {
        header("Content-Type:text/html;charset=utf-8");
        $mobile = I('post.mobile','');
        $password = I('post.password','');

        $UI = D("Info");
        if ($UI->create()) {
            $userinfo = $UI->where("mobile=%s",$mobile)->find();
            if (!empty($userinfo)) {
                if (md5($password) == $userinfo['password']) {
                    $userid = encrypt("5hn5SY23tiaUqpzYrp", $userinfo["id"]);
                    cookie("userid946", $userid, time()+94608000, "/");
                    $this->assign("jumpUrl",U('Index/index'));
                    $this->success('登陆成功！');
                } else {
                    $this->assign("jumpUrl",U('User/signup'));
                    $this->error('密码出错，请重新输入！');
                }
                
            } else {
                $this->assign("jumpUrl",U('User/signup'));
                $this->error('手机号不存在！');
            }
            
        } else {
            exit($UI->getError());
        }
        

    }

    // 用户注册信息验证写入
    public function insert()
    {
        header("Content-Type:text/html;charset=utf-8");
        $User = D("Info");
        if ($User->create()) {
            $result = $User->add();
            if ($result) {
                $this->success("注册成功！");
            } else {
                $this->error("注册失败");
            }
            
        } else {
            exit($User->getError());
        }
        
    }
}