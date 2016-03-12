<?php
	namespace Models;
	use MS\MSModel;
	class BildirimOkuModel extends MSModel{
		function Oku(){
			$Uye = $this->model("LogInOut")->GetLoginedUser();
			$Uye = $Uye["UyeBilgileri"][0];
			$UyeId = $Uye["UyeId"];
			$BildirimId = intval($this->url[1]);
			if($BildirimId>0){
				$BildirimBilgileri = $this->select("bildirimler","UyeId='$UyeId' and BildirimId='$BildirimId'");
				if(count($BildirimBilgileri)>0){
					$this->update("bildirimler","Gorulme='1'","BildirimId='$BildirimId'");
				}
			}
			header("Location:".$this->site."/Main");
		}
	}
?>