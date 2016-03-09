<?php
	namespace Controllers;
	use MS\MSController;
	use MS\Acl;
	class Ihtiyaclarim extends MSController{
		function __construct(){
			parent::__construct();
			$this->acl = new Acl;
			$this->acl->setAccess(array(
				array(
					"actions" => array("actionIndex","Sil","Duzenle"),
					"expression" => $this->Kontrol(),
					"redirect" => "Main"
				)
			));
		}
		function actionIndex(){
			$this->controller("Header");
			$data = $this->model("Ihtiyaclarim")->Ihtiyaclar();
			$this->view("Ihtiyaclarim",$data);
		}
		function Duzenle(){
			$this->controller("Header");
			$data = $this->model("Ihtiyaclarim")->Duzenle();
			$this->view("IhtiyaclarimDuzenle",$data);
		}
		function Sil(){
			$data = $this->model("Ihtiyaclarim")->Sil();
		}
		function Kontrol(){
			$IsLogin = $this->model("LogInOut")->IsLogin();
			$UyeBilgi = $this->model("LogInOut")->GetLoginedUser();
			$Tip = $UyeBilgi["UyeBilgileri"][0]["Tip"];
			if($Tip == 2 and $IsLogin){
				return true;
			}
			return false;
		}
	}
?>