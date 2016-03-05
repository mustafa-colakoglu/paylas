<?php
	namespace Controllers;
	use MS\MSController;
	class Header extends MSController{
		function actionIndex(){
			if($this->model("LogInOut")->IsLogin()){
				$data = $this->model("LogInOut")->GetLoginedUser();
				$this->view("");
			}
			else{
				$this->view("StandartHeader");
			}
		}
	}
?>