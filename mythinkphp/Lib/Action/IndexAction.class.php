<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		$Data=M('Data');
		$this->data=$Data->where("`id` in (1,2,3)")->select();
		$this->display();
    }
}