<?php
namespace Home\Controller;
use Think\Controller;
class DataController extends Controller{
	public function showAll_1(){
		$Data = M('Data');
		$list = $Data->limit(10)->select();
		$this->assign('list', $list);
		$this->display();
	}

	public function showAll(){
		$Data = M('Data');
		$list = $Data->limit(10)->select();
		$this->assign('list', $list);
		layout(true);
		$this->display();
	}

	public function read($id=0){
		echo "id=". $id;
	}

	public function archive($year='2013', $month='01'){
		echo "year=" . $year . "month" .$month;
	}
}