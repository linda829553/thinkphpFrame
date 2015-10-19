<?php
namespace Admin\Controller;
class NewsController extends AdminController {

    public function __construct(){
        parent::__construct();
        layout(true);
    }

    public function index($keywords='')
    {
    	
	    header("Content-type: text/html; charset=utf-8"); 
        $News = M("news");
        if (isset($keywords) && $keywords) {

            $count = $News->where("name like '%s' OR content like '%s'",'%'.$keywords.'%','%'.$keywords.'%')->count(); // 查询记录总条数
            // echo $count;
            // exit;
        } else {
            $count = $News->where('1')->count(); // 查询记录总条数
        }
        
        
        $Page = new \Think\Page($count, 10); // 实例化分页类，传入总记录数和每页记录数（25）

        $show = $Page->show(); // 分页显示输出
        // 进行分页查询 注意limit方法的参数要使用Page类的属性
        if (isset($keywords) && $keywords) {
            $list = $News->where("name like '%s' OR content like '%s'",'%'.$keywords.'%','%'.$keywords.'%')->order('post_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
            // echo $list;
            // exit;
        } else {
            $list = $News->where('1')->order('post_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        }

        $this->assign('list', $list);  // 赋值数据集
        $this->assign('page',$show);  // 赋值分页输出

        $this->display(); //输出模板
    }

    public function insert()
    {
        // echo "save_member";
        // dump(I("post."));
        $News = D('News');
        if ($News->create()) {
            // $News->post_time = NOW_TIME;
            $result = $News->add();
            if ($result) {
                $this->success('数据添加成功!');
                // echo $News->getLastSql();
            } else {
                $this->error('数据添加错误!');
            }
            
        } else {
            $this->error($News->getError());
        }
    }

    // 显示编辑任务
    public function show_edit($id=0)
    {
        // echo "编辑新闻";
        $News = M("news");
        $data = $News->where("id=%d",$id)->find();
        // echo $id;
        // dump($data);
        $this->assign("data",$data);
        $this->display();


    }

    // 更新数据
    public function update($id=0)
    {
        $News = D("News");
        if ($News->create()) {
            $result = $News->save();
            if ($result) {
                $this->success('数据更新成功!');
                // echo $News->getLastSql();
            } else {
                $this->error('数据更新错误!');
            }
        } else {
            $this->error($News->getError());
        }
        
    }


    // 删除新闻，站内新闻无法删除
    public function delete($id=0){
        $News = M("News");

        if($News->delete($id)){
            $this->success("删除成功!");
        }else{
            $this->error("删除出错!");
        }

    }

    // 显示编辑新闻分类表单
    // public function show_edit_cat()
    // {
        
    // }

    // 更新新闻分类编辑


}