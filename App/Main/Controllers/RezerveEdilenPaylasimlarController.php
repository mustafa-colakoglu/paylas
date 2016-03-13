<?php
	namespace Controllers;
	use MS\MSController;
	use MS\Acl;
	class RezerveEdilenPaylasimlar extends MSController{
		function __construct(){
			parent::__construct();
			$this->acl = new Acl(array(
				array(
					"actions" => array("actionIndex","Verildi","Verilmedi"),
					"expression" => $this->model("LogInOut")->IsLogin() and $this->Kontrol(),
					"redirect" => "Main"
				)
			));
		}
		function actionIndex(){
			$this->controller("Header");
			$data = array_merge($this->model("RezerveEdilenPaylasimlar")->Paylasimlar(),$this->model("LogInOut")->GetLoginedUser());
			$this->view("RezerveEdilenPaylasimlar",$data);
		}
		function Verildi(){ $this->model("RezerveEdilenPaylasimlar")->Verildi();}
		function Verilmedi(){ $this->model("RezerveEdilenPaylasimlar")->Verilmedi();}
		function Kontrol(){
			$Uye = $this->model("LogInOut")->GetLoginedUser();
			$Uye = $Uye["UyeBilgileri"][0];
			if($Uye["Tip"] == 3){
				return true;
			}
		}
	}
?>