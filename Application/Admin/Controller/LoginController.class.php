<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {


    public function index(){
    	$this->display();
    }

    public function update(){
        header("Content-Type:text/html; charset=utf-8");
    	$username = I("post.username");
        $password = Md5(I("post.password"));



        $User = M("user");

        $data = $User->where("username = '$username' AND password = '$password'")->find();
        // echo $User->getLastSql();
        // dump($data);
        // exit;


        if($data){
           
                # code...
                session('username', $username);
                $this->redirect("Admin/Index/index",'',0,'登录成功，正在跳转...');

        }else{
            $this->error("用户名密码错误!");
        }
    }

}