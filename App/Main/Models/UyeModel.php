<?php
	namespace Models;
	use MS\MSModel;
	class UyeModel extends MSModel{
		function BilgiGuncelle($UyeId, $Sub, $Value){
			$this->update("uyeler","$Sub='$Value'","UyeId='$UyeId'");
		}
		function PostBilgiGuncelle(){
			$UyeBilgileri = $this->model("LogInOut")->GetLoginedUser();
			$U = $UyeBilgileri["UyeBilgileri"][0];
			if($_POST){
				if(isset($_POST["Ad"])){
					if($U["Ad"] == ""){
						$Ad = $this->Uselib->formDataFix($_POST["Ad"]);
						$this->BilgiGuncelle($U["UyeId"],"Ad",$Ad);
					}
				}
				if(isset($_POST["Soyad"])){
					if($U["Soyad"] == ""){
						$Soyad = $this->Uselib->formDataFix($_POST["Soyad"]);
						$this->BilgiGuncelle($U["UyeId"],"Soyad",$Soyad);
					}
				}
				if(isset($_POST["CepTel"])){
					if($U["CepTel"] == ""){
						$CepTel = $this->Uselib->formDataFix($_POST["CepTel"]);
						$this->BilgiGuncelle($U["UyeId"],"CepTel",$CepTel);
					}
				}
				if(isset($_POST["Tc"])){
					if($U["Tc"] == 0){
						$Tc = $this->Uselib->formDataFix($_POST["Tc"]);
						$this->BilgiGuncelle($U["UyeId"],"Tc",$Tc);
					}
				}
				if(isset($_POST["IlId"])){
					if($U["IlId"] == 0){
						$IlId = $this->Uselib->formDataFix($_POST["IlId"]);
						$this->BilgiGuncelle($U["UyeId"],"IlId",$IlId);
					}
				}
				if(isset($_POST["KisaOzet"])){
					$KisaOzet = $this->Uselib->formDataFix($_POST["KisaOzet"]);
					$this->BilgiGuncelle($U["UyeId"],"KisaOzet",$KisaOzet);
				}
				if(isset($_POST["Sifre1"])){
					$Sifre1 = md5(md5($_POST["Sifre1"]));
				}
				else{
					$Sifre1 = false;
				}
				if(isset($_POST["Sifre2"])){
					$Sifre2 = md5(md5($_POST["Sifre2"]));
				}
				else{
					$Sifre2 = false;
				}
				if(isset($_POST["Sifre"])){
					$Sifre = md5(md5($_POST["Sifre"]));
				}
				else{
					$Sifre = "";
				}
				if($Sifre1 and $Sifre2){
					if($Sifre1 == $Sifre2){
						$UyeId = $U["UyeId"];
						$Kontrol = $this->select("uyeler","UyeId='$UyeId' and Sifre='$Sifre'");
						if(count($Kontrol)>0){
							$this->update("uyeler","Sifre='$Sifre1'");
							header("Location:".$this->site."/Giris");
						}
					}
				}
			}
		}
	}
?>