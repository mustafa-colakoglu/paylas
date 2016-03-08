<?php
	namespace Models;
	use MS\MSModel;
	class IhtiyaclarimModel extends MSModel{
		function Ihtiyaclar(){
			$Uye = $this->model("LogInOut")->GetLoginedUser();
			$UyeId = $Uye["UyeBilgileri"][0]["UyeId"];
			$data["Ihtiyaclar"] = $this->select("ihtiyaclar","SahipId='$UyeId'");
			return $data;
		}
		function Duzenle(){
			$Id = intval($this->url[2]);
			$Hata = 0;
			if($Id == 0){
				header("Location:".$this->site."/Main");
			}
			else{
				$Uye = $this->model("LogInOut")->GetLoginedUser();
				$UyeId = $Uye["UyeBilgileri"][0]["UyeId"];
				$Ihtiyac = $this->select("ihtiyaclar","SahipId='$UyeId' and IhtiyacId='$Id'");
				if(count($Ihtiyac)>0){
					$data["Kategoriler"] = $this->select("kategoriler");
					$data["Ihtiyac"] = $Ihtiyac[0];
					return $data;
				}
				header("Location:".$this->site."/Main");
			}
		}
	}
?>