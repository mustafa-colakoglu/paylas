<?php
	namespace Controllers;
	use MS\MSController;
	class Header extends MSController{
		function actionIndex(){
			if($this->model("LogInOut")->IsLogin()){
				$data = $this->model("LogInOut")->GetLoginedUser();
				$data = array_merge($data,array("EksikBilgiVar" => true));
				$this->view("UserHeader",$data);
			}
			else{
				$this->view("StandartHeader");
			}
		}
	}
?>