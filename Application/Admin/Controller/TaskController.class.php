<?php
namespace Admin\Controller;
class TaskController extends AdminController {
	public function __construct()
	{
		parent::__construct();
		layout(true);
	}

	public function index()
	{
	    $User = M("tasks");
        $count = $User->where('1')->count(); // 查询记录总条数
        $Page = new \Think\Page($count, 10); // 实例化分页类，传入总记录数和每页记录数（25）

        $show = $Page->show(); // 分页显示输出
        // 进行分页查询 注意limit方法的参数要使用Page类的属性
        $list = $User->where('1')->order('task_posttime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        
        $this->assign('list', $list);  // 赋值数据集
        $this->assign('page',$show);  // 赋值分页输出

		$this->display();
	}
	// 插入任务
	public function insert(){
		// echo "save_member";
		// dump(I("post."));
		$Form = D('tasks');
		$task = $Form->create();
		if ($Form->create()) {
			$start_time = strtotime($Form->task_start_time);
			$end_time   = strtotime($Form->task_end_time);
			$Form->task_start_time = $start_time;
			$Form->task_end_time   = $end_time;

			$result = $Form->add();
			if ($result) {
				$this->success('数据添加成功!');
				// echo $Form->getLastSql();
			} else {
				$this->error('数据添加错误!');
			}
			
		} else {
			$this->error($Form->getError());
		}
		
	}

	// 显示编辑任务

	public function show_edit($id=0)
	{
		// echo "编辑任务";
		$Form = M("tasks");
		$data = $Form->where("id=%d",$id)->find();
		// echo $id;
		// dump($data);
		$this->assign("data",$data);
		$this->display();


	}

	// 显示审核表单
	public function show_check_form($id=0)
	{
		# code...
		$this->display();
	}

	// ajax 审核表单
	public function checkAjax()
	{
		$TU = M("task_user");
		$state = $TU->where("task_id=%d AND user_id=%d",I("get.taskid"),I("get.userid"))->getField("state");
		if ($state == 1) {
			echo "0";
			exit;
		} else {
			$TU->where("task_id=%d AND user_id=%d",I("get.taskid"),I("get.userid"))->setField("state", 1);
			// 对应任务的会员的积分增加任务的单位积分
			// $User->where('id=5')->setInc('score',3); // 用户的积分加3
			$Task= M("tasks");
			$task_jifeng = $Task->where("id=%d",I("get.taskid"))->getField("task_jifeng");
			$User = M("user_info");
			$User->where("id=%d",I("get.userid"))->setInc("jifeng",$task_jifeng);
			echo "1";
		}
		
		

		// echo $sql;
		// exit;

	}

	// 更新数据
	public function update($id=0)
	{
		$Form = M("tasks");
		if ($Form->create()) {
			$start_time = strtotime($Form->task_start_time);
			$end_time   = strtotime($Form->task_end_time);
			$Form->task_start_time = $start_time;
			$Form->task_end_time   = $end_time;

			$result = $Form->save();
			if ($result) {
				$this->success('数据更新成功!');
				// echo $Form->getLastSql();
			} else {
				$this->error('数据更新错误!');
			}
		} else {
			$this->error($Form->getError());
		}
		
	}

	// 显示报名的会员
	public function show_baoming($id=0)
	{
		$Model = M("task_user");
		$count = $Model->join("tasks ON tasks.id=task_user.task_id")->join("user_info ON task_user.user_id=user_info.id AND task_id=".$id)->count(); // 查询记录总条数
	
        $Page = new \Think\Page($count, 10); // 实例化分页类，传入总记录数和每页记录数（25）

        $show = $Page->show(); // 分页显示输出
        // 进行分页查询 注意limit方法的参数要使用Page类的属性
        $list = $Model->join("tasks ON tasks.id=task_user.task_id")->join("user_info ON task_user.user_id=user_info.id AND task_id=".$id)->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
  //       dump($list);
		// exit;
        $this->assign('list', $list);  // 赋值数据集
        $this->assign('page',$show);  // 赋值分页输出

		$this->display();

	}

	// 删除任务,同时删除报名该任务的人
	public function delete($id=0){
        $User = M("tasks");
        $TU = M("task_user");
        if($User->delete($id) && $TU->where("task_id=%d",$id)->delete()){
            $this->success("删除成功!");
        }else{
            $this->error("删除出错!");
        }

    }

    // 删除报名某个任务的人
    public function delete_bm($id=0, $tid=0)
    {
    	$TU = M("task_user");
    	if ($TU->where("task_id=%d AND user_id=%d",$tid,$id)->delete()) {
    		$this->success("删除成功!");
    	} else {
    		$this->error("删除出错!");
    	}
    	
    }


}