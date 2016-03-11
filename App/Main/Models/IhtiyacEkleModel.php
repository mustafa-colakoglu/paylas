<?php
	namespace Models;
	use MS\MSModel;
	class IhtiyacEkleModel extends MSModel{
		function Veriler(){
			$data["Kaydetme"] = 0;
			if($_POST){
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
				if(empty($KategoriId) and empty($Baslik)){
					$data["Kaydetme"] = 1;
				}
				else if(empty($KategoriId) and !empty($YeniKategori) and !empty($Baslik)){
					$UyeBilgileri = $this->model("LogInOut")->GetLoginedUser();
					$UyeBilgileri = $UyeBilgileri["UyeBilgileri"][0];
					$SahipId = $UyeBilgileri["UyeId"];
					$IlId = $UyeBilgileri["IlId"];
					$KategoriKontrol = $this->select("kategoriler","KategoriAdi='$YeniKategori'");
					if(count($KategoriKontrol)>0){
						$KategoriId = $KategoriKontrol[0]["KategoriId"];
					}
					else{
						$this->insert("kategoriler",false,"'','$YeniKategori'");
						$KategoriId = $this->lastInsertId();
					}
					if(!$this->Kontrol()){
						$this->insert("ihtiyaclar",false,"'','$SahipId','$KategoriId','$Baslik','$IlId','0','0','0','1'");
						$data["Kaydetme"] = 2;
					}
					else{
						$data["Kaydetme"] = 1;
					}
				}
				else if(!empty($KategoriId) and !empty($Baslik)){
					$UyeBilgileri = $this->model("LogInOut")->GetLoginedUser();
					$UyeBilgileri = $UyeBilgileri["UyeBilgileri"][0];
					$SahipId = $UyeBilgileri["UyeId"];
					$IlId = $UyeBilgileri["IlId"];
					$KategoriKontrol = $this->select("kategoriler","KategoriId='$KategoriId'");
					if(count($KategoriKontrol)>0){
						$KategoriId = $KategoriKontrol[0]["KategoriId"];
					}
					else{
						$data["Kaydetme"] = 1;
					}
					if(!$this->Kontrol()){
						$this->insert("ihtiyaclar",false,"'','$SahipId','$KategoriId','$Baslik','$IlId','0','0','0','1'");
						$data["Kaydetme"] = 2;
					}
					else{
						$data["Kaydetme"] = 1;
					}
				}
				else{
					$data["Kaydetme"] = 1;
				}
			}
			$data["EksikVarmi"] = $this->Kontrol();
			$data["Kategoriler"] = $this->select("kategoriler","","","ORDER BY KategoriAdi ASC");
			return $data;
		}
		function Kontrol(){
			$UyeBilgileri = $this->model("LogInOut")->GetLoginedUser();
			$U = $UyeBilgileri["UyeBilgileri"][0];
			extract($U);
			if(empty($Ad) or empty($Soyad) or empty($CepTel) or empty($Tc) or $IlId == 0 or $Tip != 2){
				return true;
			}
			else if($Tip == 2 and empty($KisaOzet)){
				return true;
			}
			return false;
		}
	}
?>