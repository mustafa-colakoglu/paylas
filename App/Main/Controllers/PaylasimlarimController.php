<?php
	namespace Controllers;
	use MS\MSController;
	use MS\Acl;
	class Paylasimlarim extends MSController{
		function __construct(){
			parent::__construct();
			$this->acl = new Acl(array(
				array(
					"actions" => array("actionIndex","Duzenle","Sil"),
					"expression" => $this->model("LogInOut")->IsLogin() and $this->Kontrol(),
					"redirect" => "Main"
				)
			));
		}
		function actionIndex(){
			$this->controller("Header");
			$data = $this->model("Paylasimlarim")->Paylasimlar();
			$this->view("Paylasimlar",$data);
		}
		function Duzenle(){
			$this->controller("Header");
			$data = $this->model("Paylasimlarim")->Duzenle();
			$this->view("PaylasimlarimDuzenle",$data);
		}
		function Sil(){
			$data = $this->model("Paylasimlarim")->Sil();
		}
		function Kontrol(){
			$Uye = $this->model("LogInOut")->GetLoginedUser();
			$Uye = $Uye["UyeBilgileri"][0];
			$Tip = $Uye["Tip"];
			if($Tip == 3){
				return true;
			}
			return false;
		}
	}
?>