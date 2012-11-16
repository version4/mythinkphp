<?php
class DairyAction extends Action{
	public function index($browerType='PC'){
		$browerType=$_GET['type'];
		switch ($browerType){
			case 'PC':
				$this->display("PC");
				break;
			case 'MAC':
				$this->display("MAC");
				break;
			case 'Linux':
				$this->display("Linux");
				break;
			case 'IOS':
				echo "你正在使用IOS设备浏览网页。";
				break;
			case 'Android':
				echo "你正在使用Android设备浏览网页。";
				break;
		}
	}
}