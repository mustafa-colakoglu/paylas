<?php
	namespace Controllers;
	use MS\MSController;
	use MS\Acl;
	class RezerveEttiginizPaylasimlar extends MSController{
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
			$data = array_merge($this->model("RezerveEttiginizPaylasimlar")->Paylasimlar(),$this->model("LogInOut")->GetLoginedUser());
			$this->view("RezerveEttiginizPaylasimlar",$data);
		}
		function Alindi(){ $this->model("RezerveEttiginizPaylasimlar")->Alindi();}
		function Alinmadi(){ $this->model("RezerveEttiginizPaylasimlar")->Alinmadi();}
		function Kontrol(){
			$Uye = $this->model("LogInOut")->GetLoginedUser();
			$Uye = $Uye["UyeBilgileri"][0];
			if($Uye["Tip"] == 2){
				return true;
			}
		}
	}
?>