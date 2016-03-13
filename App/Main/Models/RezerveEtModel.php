<?php
	namespace Models;
	use MS\MSModel;
	class RezerveEtModel extends MSModel{
		function Rezerve(){
			$Uye = $this->model("LogInOut")->GetLoginedUser();
			$Uye = $Uye["UyeBilgileri"][0];
			$UyeId = $Uye["UyeId"];
			$PaylasimId = @intval($this->url[1]);
			$IhtiyacId = @intval($this->url[2]);
			if($PaylasimId == 0 or $IhtiyacId==0){
				header("Location:".$this->site."/Main");
				exit;
			}
			$IhtiyacKontrol = $this->select("ihtiyaclar","IhtiyacId='$IhtiyacId' and SahipId='$UyeId'");
			if(count($IhtiyacKontrol)<=0){
				header("Location:".$this->site."/Main");
				exit;
			}
			if($Uye["Tip"] == 2){
				$UyeId = $Uye["UyeId"];
				$UyeKullaniciAdi = $Uye["KullaniciAdi"];
				$PaylasimKontrol = $this->select("paylasimlar","PaylasimId='$PaylasimId' and RezerveEdilme='0'","RezerveEdilme,PaylasanId,Baslik");
				if(count($PaylasimKontrol)>0){
					$data["Hata"] = 2; // doğru işlem
					$this->update("paylasimlar","RezerveEdilme='1',RezerveEdenId='$UyeId',VerilenIhtiyacId='$IhtiyacId'","PaylasimId='$PaylasimId'");
					$PaylasanId = $PaylasimKontrol[0]["PaylasanId"];
					$Baslik = $PaylasimKontrol[0]["Baslik"];
					$Bildirim = $UyeKullaniciAdi.' adlı kullanıcı sizin <b>'.$Baslik.'</b> başlıklı ürününüzü rezerve etti. <a href="'.$this->site.'/MesajAt/'.$UyeId.'">Burdan</a> iletişime geçerek kendisine paylaşımınızı ulaştırabilirisinz.';
					$this->insert("bildirimler",false,"'','$PaylasanId','$Bildirim','0'");
				}
				else{
					$data["Hata"] = 1; // daha önce alınmış paylaşım
				}
			}
			else{
				header("Location:".$this->site."/Main");
			}
			return $data;
		}
	}
?>