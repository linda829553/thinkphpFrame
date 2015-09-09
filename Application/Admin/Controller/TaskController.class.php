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

        // foreach ($list as $row) {
        // 	foreach ($row as $key => $value) {
        // 		if ($key == 'task_start_time' || $key == 'task_end_time') {
        // 			$arr_list[]['zhaomu_time'] .= 
        // 		} else {
        // 			# code...
        // 		}
        		
        // 	}
        // }
        
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

	// 编辑任务

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

	// 删除任务
	public function delete($id=0){
            $User = M("tasks");
            if($User->delete($id)){
                $this->success("删除成功!");
            }else{
                $this->error("删除出错!");
            }

    }


}