<?php
	namespace Models;
	use MS\MSModel;
	class IhtiyaclarimModel extends MSModel{
		function Ihtiyaclar(){
			$Uye = $this->model("LogInOut")->GetLoginedUser();
			$UyeId = $Uye["UyeBilgileri"][0]["UyeId"];
			$data["Ihtiyaclar"] = $this->select("ihtiyaclar","SahipId='$UyeId' and Alinma='0'");
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
				$Ihtiyac = $this->select("ihtiyaclar","SahipId='$UyeId' and IhtiyacId='$Id' and Alinma='0'");
				if(count($Ihtiyac)>0){
					$data["Kategoriler"] = $this->select("kategoriler");
					$data["Kaydetme"] = 0;
					if($_POST){
						$data["Kaydetme"] = 2;
						if(isset($_POST["KategoriId"])){
							$KategoriId = $this->Uselib->clean($_POST["KategoriId"]);
						}
						else{
							$KategoriId = false;
						}
						if(isset($_POST["Baslik"])){
							$Baslik = $this->Uselib->formDataFix($_POST["Baslik"]);
						}
						else{
							$Baslik = false;
						}
						if(isset($_POST["YeniKategori"])){
							$YeniKategori = $this->Uselib->formDataFix($_POST["YeniKategori"]);
						}
						else{
							$YeniKategori = "";
						}
						if(empty($KategoriId) and (empty($Baslik) or empty($Aciklama))){
							$data["Kaydetme"] = 1;
						}
						else if(!empty($YeniKategori) and !empty($Baslik)){
							$UyeBilgileri = $this->model("LogInOut")->GetLoginedUser();
							$UyeBilgileri = $UyeBilgileri["UyeBilgileri"][0];
							$PaylasanId = $UyeBilgileri["UyeId"];
							$IlId = $UyeBilgileri["IlId"];
							$KategoriKontrol = $this->select("kategoriler","KategoriAdi='$YeniKategori'");
							if(count($KategoriKontrol)>0){
								$KategoriId = $KategoriKontrol[0]["KategoriId"];
							}
							else{
								$this->insert("kategoriler",false,"'','$YeniKategori'");
								$KategoriId = $this->lastInsertId();
							}
							if($data["Kaydetme"] == 2){ 
								$this->update("ihtiyaclar","KategoriId='$KategoriId',Baslik='$Baslik'","IhtiyacId='$Id'");
							}
						}
						else if(!empty($KategoriId) and !empty($Baslik)){
							$UyeBilgileri = $this->model("LogInOut")->GetLoginedUser();
							$UyeBilgileri = $UyeBilgileri["UyeBilgileri"][0];
							$PaylasanId = $UyeBilgileri["UyeId"];
							$IlId = $UyeBilgileri["IlId"];
							$KategoriKontrol = $this->select("kategoriler","KategoriId='$KategoriId'");
							if(count($KategoriKontrol)>0){
								$KategoriId = $KategoriKontrol[0]["KategoriId"];
							}
							else{
								$data["Kaydetme"] = 1;
							}
							if($data["Kaydetme"] == 2){ 
								$this->update("ihtiyaclar","KategoriId='$KategoriId',Baslik='$Baslik'","IhtiyacId='$Id'");
							}
						}
						$Ihtiyac = $this->select("ihtiyaclar","IhtiyacId='$Id' and SahipId='$UyeId'");
					}
					$data["Ihtiyac"] = $Ihtiyac[0];
					return $data;
				}
				header("Location:".$this->site."/Main");
			}
		}
		function Sil(){
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
					$this->delete("ihtiyaclar","IhtiyacId='$Id'");
				}
			}
			header("Location:".$this->site."/Ihtiyaclarim");
		}
	}
?>