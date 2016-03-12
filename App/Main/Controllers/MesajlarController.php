<?php
	namespace Controllers;
	use MS\MSController;
	use MS\Acl;
	class Mesajlar extends MSController{
		function __construct(){
			parent::__construct();
			$this->acl = new Acl(array(
				array(
					"actions" => array("actionIndex","MesajlariOku","MesajGonder"),
					"expression" => $this->model("LogInOut")->IsLogin(),
					"redirect" => "Main"
				)
			));
		}
		function actionIndex(){
			$this->controller("Header");
			$data["TumKonular"] = $this->model("Mesaj")->TumKonular;
			$data["UyeId"] = $this->model("Mesaj")->UyeId;
			$this->view("Mesajlar",$data);
		}
		function MesajlariOku(){
			if($_POST){
				$this->model("Mesaj")->YeniMesajGonder();
			}
			$this->controller("Header");
			$data["TumKonular"] = $this->model("Mesaj")->TumKonular;
			$data["UyeId"] = $this->model("Mesaj")->UyeId;
			$this->view("Mesajlar",$data);
			$data = $this->model("Mesaj")->MesajlariOku();
			$this->view("MesajlariOku",$data);
		}
	}
?>