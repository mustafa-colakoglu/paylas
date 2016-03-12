<?php
	namespace Models;
	use MS\MSModel;
	class BildirimlerModel extends MSModel{
		function Bildirim(){
			$Uye = $this->model("LogInOut")->GetLoginedUser();
			$Uye = $Uye["UyeBilgileri"][0];
			$UyeId = $Uye["UyeId"];
			return $this->select("bildirimler","UyeId='$UyeId' and Gorulme='0'");
		}
	}
?>