<?php
	namespace Controllers;
	use MS\MSController;
	use MS\Acl;
	class RezerveEttigimPaylasimlar extends MSController{
		function __construct(){
			parent::__construct();
			$this->acl = new Acl(array(
				array(
					"actions" => array("actionIndex","Alindi","Alinmadi"),
					"expression" => $this->model("LogInOut")->IsLogin() and $this->Kontrol(),
					"redirect" => "Main"
				)
			));
		}
		function actionIndex(){
			$this->controller("Header");
			$data = array_merge($this->model("RezerveEttigimPaylasimlar")->Paylasimlar(),$this->model("LogInOut")->GetLoginedUser());
			$this->view("RezerveEttigimPaylasimlar",$data);
		}
		function Alindi(){ $this->model("RezerveEttigimPaylasimlar")->Alindi();}
		function Alinmadi(){ $this->model("RezerveEttigimPaylasimlar")->Alinmadi();}
		function Kontrol(){
			$Uye = $this->model("LogInOut")->GetLoginedUser();
			$Uye = $Uye["UyeBilgileri"][0];
			if($Uye["Tip"] == 2){
				return true;
			}
		}
	}
?>