<?php
	namespace Controllers;
	use MS\MSController;
	use MS\Acl;
	class Bildirimler extends MSController{
		function __construct(){
			parent::__construct();
			$this->acl = new Acl(array(
				array(
					"actions" => array("actionIndex"),
					"expression" => $this->model("LogInOut")->IsLogin(),
					"redirect" => "Main"
				)
			));
		}
		function actionIndex(){
			$this->controller("Header");
			$data["Bildirimler"] = $this->model("Bildirimler")->Bildirim();
			$this->view("Bildirimler",$data);
		}
	}
?>