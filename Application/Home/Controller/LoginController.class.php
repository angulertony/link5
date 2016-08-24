<?php
	namespace Home\Controller;
	use think\Controller;
	class LoginController extends Controller
	{
		public function index()
		{
			$this->write();
			$this->display("/login");
		}
		public function write()
		{
			$User=M("user");
			$person=$User->where("ID=1")->find();
			$p_name = $User->where('id=2')->getField('name');
			$p_age = $User->where('id=2')->getField('age');
			$this->assign("p_name",$p_name);
			$this->assign("p_age",$p_age);
		}
	}	
?>