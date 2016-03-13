<?php
	namespace Controllers\Admin;
	use MS\MSController;
	use MS\Acl;
	class Admin extends MSController{
		function __construct(){
			parent::__construct();
			$this->acl = new Acl(array(
				array(
					"actions" => array("actionIndex","GenelBakis"),
					"expression" => $this->model("LogInOut")->IsLogin(),
					"redirect" => "Admin/Giris"
				),
				array(
					"actions" => array("Giris"),
					"expression" => !$this->model("LogInOut")->IsLogin(),
					"redirect" => "Admin/GenelBakis"
				)
			));
		}
		function actionIndex(){
			header("Location:".$this->site."/Admin/GenelBakis");
		}
		function Giris(){
			if($_POST){
				
			}
			$this->view("Admin/Giris");
		}
		function GenelBakis(){
			echo "GENEL BAKÝS";
		}
	}
?>