<?php
	namespace Controllers;
	use MS\MSController;
	use MS\Acl;
	class GonulluUyeOl extends MSController{
		function __construct(){
			parent::__construct();
			$this->acl = new Acl();
			$this->acl->setAccess(array(
				array(
					"actions" => array("actionIndex"),
					"expression" => !$this->model("LogInOut")->IsLogin(),
					"redirect" => "Main"
				)
			));
		}
		function actionIndex(){
			$this->controller("Header");
		}
	}
?>