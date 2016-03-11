<?php
	namespace Models;
	use MS\MSModel;
	class PaylasimlarimModel extends MSModel{
		function Paylasimlar(){
			$Uye = $this->model("LogInOut")->GetLoginedUser();
			$UyeId = $Uye["UyeBilgileri"][0]["UyeId"];
			$data["Paylasimlar"] = $this->select("paylasimlar","PaylasanId='$UyeId' and Verilme='0' and RezerveEdilme='0'");
			return $data;
		}
		function Duzenle(){
			$Id = intval($this->url[2]);
			$Hata = 0;
			if($Id == 0){
				header("Location:".$this->site."/Main");
				exit;
			}
			else{
				$Uye = $this->model("LogInOut")->GetLoginedUser();
				$UyeId = $Uye["UyeBilgileri"][0]["UyeId"];
				$Paylasim = $this->select("paylasimlar","PaylasanId='$UyeId' and PaylasimId='$Id' and Verilme='0' and RezerveEdilme='0' and Onay='1'");
				if(count($Paylasim)>0){
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
						if(isset($_POST["Aciklama"])){
							$Aciklama = $this->Uselib->formDataFix($_POST["Aciklama"]);
						}
						else{
							$Aciklama = "";
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
						if($FileError == 0){
							$Silinecek = $this->select("paylasimlar","PaylasimId='$Id'","ResimYolu");
							@unlink(APPLICATION_PATH."/Front/images/".$Silinecek[0]["ResimYolu"]);
							$copy = copy($File["tmp_name"],APPLICATION_PATH."/Front/images/".$Id.$Uzanti);
							if($copy){
								$this->update("paylasimlar","ResimYolu='".$Id.$Uzanti."'","PaylasimId='$Id'");
							}
						}
						if(empty($KategoriId) and (empty($Baslik) or empty($Aciklama))){
							$data["Kaydetme"] = 1;
						}
						else if(!empty($YeniKategori) and !empty($Baslik) and !empty($Aciklama)){
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
								$this->update("paylasimlar","KategoriId='$KategoriId',Baslik='$Baslik',Aciklama='$Aciklama'","PaylasimId='$Id'");
							}
						}
						else if(!empty($KategoriId) and !empty($Baslik) and !empty($Aciklama)){
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
							if($data["Kaydetme"] == 2){
								$this->update("paylasimlar","KategoriId='$KategoriId',Baslik='$Baslik',Aciklama='$Aciklama'","PaylasimId='$Id'");
							}
						}
						$Paylasim = $this->select("paylasimlar","PaylasimId='$Id' and PaylasanId='$UyeId'");
					}
					$data["Paylasim"] = $Paylasim[0];
					$data["Kategoriler"] = $this->select("kategoriler");
					return $data;
				}
				else{
					header("Location:".$this->site."/Main");
				}
			}
		}
		function Sil(){
			$Id = intval($this->url[2]);
			if($Id == 0){
				header("Location:".$this->site."/Main");
				exit;
			}
			$this->delete("paylasimlar","PaylasimId='$Id'");
			header("Location:".$this->site."/Paylasimlarim");
		}
	}
?>