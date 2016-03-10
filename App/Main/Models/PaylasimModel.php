<?php
	namespace Models;
	use MS\MSModel;
	class PaylasimModel extends MSModel{
		function PaylasimEkle(){
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
				if(isset($_POST["Aciklama"])){
					$Aciklama = $this->Uselib->formDataFix($_POST["Aciklama"]);
				}
				else{
					$Aciklama = false;
				}
				if(isset($_POST["YeniKategori"])){
					$YeniKategori = $this->Uselib->formDataFix($_POST["YeniKategori"]);
				}
				else{
					$YeniKategori = "";
				}
				if(isset($_FILES["Resim"])){
					$File = $_FILES["Resim"];
					if($File["error"] != 0){
						$FileError = 1;
					}
					if($File["type"] == "image/jpg" or $File["type"] == "image/jpeg" or $File["type"] == "image/png"){
						$FileError = 0;
					}
					else{
						$FileError = 1;
					}
				}
				else{
					$FileError = 1;
				}
				if($FileError == 0){
					if($File["type"] == "image/jpg" or $File["type"] == "image/jpeg"){
						$Uzanti = ".jpg";
					}
					else{
						$Uzanti = ".png";
					}
				}
				if(empty($KategoriId) and (empty($Baslik) or empty($Aciklama)) or $FileError == 1){
					$data["Kaydetme"] = 1;
				}
				else if(empty($KategoriId) and !empty($YeniKategori) and !empty($Baslik) and !empty($Aciklama)){
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
					if(!$this->Kontrol()){
						$this->insert("paylasimlar",false,"'','$PaylasanId','$KategoriId','$Baslik','$Aciklama','','$IlId','0','0','0','0','0'");
						$InsertId = $this->lastInsertId();
						$ResimYolu = $InsertId.$Uzanti;
						$copy = copy($File["tmp_name"],APPLICATION_PATH."/Front/images/".$ResimYolu);
						if($copy){
							$this->update("paylasimlar","ResimYolu='$ResimYolu'");
						}
						else{
							$this->delete("paylasimlar","PaylasimId='$InsertId'");
							$data["Kaydetme"] = 3;
						}
						$data["Kaydetme"] = 2;
					}
					else{
						$data["Kaydetme"] = 1;
					}
				}
				else if(!empty($KategoriId) and !empty($Baslik) and !empty($Aciklama)){
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
					if(!$this->Kontrol()){
						$this->insert("paylasimlar",false,"'','$PaylasanId','$KategoriId','$Baslik','$Aciklama','','$IlId','0','0','0','0','0'");
						$InsertId = $this->lastInsertId();
						$ResimYolu = $InsertId.$Uzanti;
						$copy = copy($File["tmp_name"],APPLICATION_PATH."/Front/images/".$ResimYolu);
						if($copy){
							$this->update("paylasimlar","ResimYolu='$ResimYolu'");
						}
						else{
							$this->delete("paylasimlar","PaylasimId='$InsertId'");
							$data["Kaydetme"] = 3;
						}
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
			if(empty($Ad) or empty($Soyad) or empty($CepTel) or empty($Tc) or $IlId == 0 or $Tip != 3){
				return true;
			}
			return false;
		}
	}
?>