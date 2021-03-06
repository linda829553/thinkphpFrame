<?php
namespace Admin\Controller;
class IndexController extends AdminController {

    public function __construct(){
        parent::__construct();
        layout(true);
    }

    public function index($keywords=''){
        // $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
            header("Content-type: text/html; charset=utf-8"); 
            $User = M("user_info");
            if (isset($keywords) && $keywords) {

                $count = $User->where("mobile like '%s' OR name like '%s'",'%'.$keywords.'%','%'.$keywords.'%')->count(); // 查询记录总条数
                // echo $count;
                // exit;
            } else {
                $count = $User->where('1')->count(); // 查询记录总条数
            }
            
            
            $Page = new \Think\Page($count, 10); // 实例化分页类，传入总记录数和每页记录数（25）

            $show = $Page->show(); // 分页显示输出
            // 进行分页查询 注意limit方法的参数要使用Page类的属性
            if (isset($keywords) && $keywords) {
                $list = $User->where("mobile like '%s' OR name like '%s'",'%'.$keywords.'%','%'.$keywords.'%')->order('posttime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
                // echo $list;
                // exit;
            } else {
                $list = $User->where('1')->order('posttime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
            }

            $this->assign('list', $list);  // 赋值数据集
            $this->assign('page',$show);  // 赋值分页输出

            $this->display(); //输出模板

    }

    public function show_edit($id=0)
    {
        $Form = M("user_info");
        $data = $Form->where("id=%d",$id)->find();
        // echo $id;
        // dump($data);
        $this->assign("data",$data);
        $this->display();
    }

    public function delete($id=0){
            $User = M("user_info");
            if($User->delete($id)){
                $this->success("删除成功!");
            }else{
                $this->error("删除出错!");
            }

    }



    public function exit_login(){
        // unset($_SESSION["username"]);
        session('username', null);
        redirect(U('/Admin/login/index'),0,"正在跳转...");
    }

    // 更改管理员名称密码
    public function changeAdminPass($value='')
    {
        $admin = M("user");
        $admin_name = $admin->find(17);
        // dump($admin_name);
        // exit;
        $this->assign("admin_name", $admin_name['username']);
        $this->display();
    }

    // 更新表单密码
    public function updatePass($value='')
    {
        # code...
        $User = D("user");
        $data = $User->create();
        // $data = $User->find(17);
        // dump($data);
        // exit;
        $User->where("id=17")->save();
        $this->success("密码修改成功！");

    }

    // 更新会员信息
    public function update_member()
    {
        # code...
        $User = D("Info");
        $User->create();
        // $data = $User->find(17);

        $data = $User->where("id=%d",$User->id)->save();
        // dump($data);
        // exit;loca

        $this->success("会员信息更新成功!");

    }

    // ajax 验证原密码
    public function checkPass()
    {
        # code...
        $oldpass = I("post.oldpassword");
        $Admin = M("user");
        $data = $Admin->find(17);
        if ($data["password"] == md5($oldpass)) {
            echo "1";
        } else {
            echo "0";
        }

    }
}