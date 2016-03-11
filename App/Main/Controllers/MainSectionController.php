<?php
	namespace Controllers;
	use MS\MSController;
	class MainSection extends MSController{
		function actionIndex(){
			if($this->model("LogInOut")->IsLogin()){
				$Uye = $this->model("LogInOut")->GetLoginedUser();
				$Uye = $Uye["UyeBilgileri"][0];
				if($Uye["Tip"] == 2){
					$data = $this->model("UyeyeGorePaylasimlar")->Paylasimlar();
					$this->view("UyeyeGorePaylasimlar",$data);
				}
			}
		}
	}
?>