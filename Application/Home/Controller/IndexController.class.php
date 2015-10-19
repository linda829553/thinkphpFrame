<?php
namespace Home\Controller;
class IndexController extends HomeController {
    // public function __construct(){
    //     parent::__construct();
    // }

    public function _initailize($value='')
    {
        parent::_initailize;
    }

    public function index(){
    	// 从数据库读取任务信息
    	$Task = M("tasks");
        // 实例化 news 模型
        $News = M("news");
        // 实例化 user_info 模型
        $User = M("user_info");
    	// 得到任务总数
    	$task_count = $Task->count();
        // 查询 新闻的总数cat_id = 4
        $news_count = $News->where("cat_id=4")->count();

    	$tasks = $Task->where(1)->order("task_posttime desc")->select();
        // 得到 cat_id = 4 的 news 数据集
        $news = $News->where("cat_id=4")->order("post_time desc")->select();

        // 得到 user_info 表，查询会员积分排行，查询会员时间排行
        $new_members = $User->order("posttime desc")->limit("10")->select();

        $jifeng_members = $User->order("jifeng desc")->limit("10")->select();
        
        $this->assign("new_members", $new_members);
        $this->assign("jifeng_members", $jifeng_members);
    	$this->assign("tasks", addTaskState($tasks));
        $this->assign("news", $news);
    	$this->assign("counts", $task_count);
        $this->assign("counts_news", $news_count);
        $this->display();
    }

    public function showPage($id=0)
    {
        $News = M("News");
        $data = $News->find($id);
        $topNews = $News->order("post_time desc")->limit(10)->select();
        $this->assign("topNews", $topNews);
        $this->assign("data",$data);
        $this->display();
    }

    public function showPage1($cat_id=0)
    {
        $News = M("News");
        $list = $News->where("cat_id=%d",$cat_id)->select();
        $topNews = $News->order("post_time desc")->limit(10)->select();
        $this->assign("topNews", $topNews);
        $this->assign("list",$list);
        $this->display();
    }

    public function getDetail($id=0)
    {
        $News = M("News");
        $data = $News->find($id);
        // echo htmlspecialchars_decode($data["content"]);
        $this->assign("data",$data);
        $this->display();
    }

    public function showTask($id=0)
    {
        $Tasks = M("tasks");
        $data = $Tasks->find($id);
        if ($data['task_end_time'] < time() or $data['have_cars'] >= $data['task_car_num']) {
            $data['task_state'] = 0;
        } else {
            $data['task_state'] = 1;
        }
        
        $topTasks = $Tasks->order("task_posttime desc")->limit(10)->select();
        foreach ($topTasks as $key => $value) {
           if ($topTasks[$key]['task_end_time'] < time() or $topTasks[$key]['have_cars'] >= $topTasks[$key]['task_car_num']) {
                $topTasks[$key]['task_state'] = 0;
            } else {
                $topTasks[$key]['task_state'] = 1;
            }
        }
        

        $this->assign("topTasks", $topTasks);
        $this->assign("data",$data);
        $this->display();
    }

    // ajax 检查任务状态
    // public function checkBaoMing($id=0)
    // {
    //     $Task = M("tasks");
    //     $data = $Task ->find($id);

    //     if ($data['task_end_time'] < time() or $data['have_cars'] >= $data['task_car_num']) {
    //         $state = 0;
    //         // echo "任务己经过期或名额己满!";
    //     } else {
    //         // $this->redirect("__CONTROLLER__/baoMing/id/$id",5,"页面跳转中");
    //         // header('location:__CONTROLLER__/baoMing/id/$id');
    //         $state = 1;
    //     }

    //     echo $state;
        
        
    // }

    public function baoMing($id=0)
    {
        $BaoMing = M("tasks");
        $data = $BaoMing ->find($id);
        if ($data['task_end_time'] < time() or $data['have_cars'] >= $data['task_car_num']) {
            $this->error("任务己经过期或名额己满");
            // echo "任务己经过期或名额己满!";
        } else {
            // $this->redirect("__CONTROLLER__/baoMing/id/$id",5,"页面跳转中");
            // header('location:__CONTROLLER__/baoMing/id/$id');
            // 报名
            // 查看cookie是否存在，如果不存在跳转到注册登录页面，存在则报名
            $cookie_id =cookie('userid946');
            // dump($cookie_id);
            // exit;

            if (empty($cookie_id)) {
                $this->redirect("User/signup");
            } else {    
                // 如果用户的id 和 任务id 在task_user 表中不存在，将用户id 任务id写入到 task_user 表
                // $userid = decrypt('5hn5SY23tiaUqpzYrp1', cookie('userid946'));
                $userid = decrypt("5hn5SY23tiaUqpzYrp", $cookie_id);
                // echo $userid;
                // exit;
                $TU = M("task_user");
                $userinfo = $TU->where("user_id=%d AND task_id=%d",$userid,$id)->find();
                // echo $count;
                // exit;
                if (!empty($userinfo)) {
                    // 提示己经报名过
                    $this->error("该任务您己经报过名了！");

                } else { // 如果没有报过名写入报名记录
                    $tu["user_id"] = $userid;
                    $tu["task_id"] = $id;
                    $tu["time"] = NOW_TIME;
                    // dump($tu);
                    $TU->add($tu);

                    // 更新tasks 表中己报名车的数量
                    $task = M("tasks"); 
                    $task->where("id=%d",$id)->setInc('have_cars');
                    // exit;
                    $this->success("报名成功!");
                }        
            }           
        }
        // $this->display();
    }
}