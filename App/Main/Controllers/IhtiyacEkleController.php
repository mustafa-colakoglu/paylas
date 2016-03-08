<?php
	namespace Controllers;
	use MS\MSController;
	use MS\Acl;
	class IhtiyacEkle extends MSController{
		function __construct(){
			parent::__construct();
			$this->acl = new Acl();
			$this->acl->setAccess(array(
				array(
					"actions" => array("actionIndex"),
					"expression" => $this->model("LogInOut")->IsLogin(),
					"redirect" => "Main"
				)
			));
		}
		function actionIndex(){
			$this->controller("Header");
			$data = $this->model("IhtiyacEkle")->Veriler();
			$this->view("IhtiyacEkleSection",$data);
		}
	}
?>