<?php
	namespace Models;
	use MS\MSModel;
	class RezerveEtModel extends MSModel{
		function Rezerve(){
			$Uye = $this->model("LogInOut")->GetLoginedUser();
			$Uye = $Uye["UyeBilgileri"][0];
			$Id = @intval($this->url[1]);
			if($Id == 0){
				header("Location:".$this->site."/Main");
				exit;
			}
			if($Uye["Tip"] == 2){
				$UyeId = $Uye["UyeId"];
				$PaylasimKontrol = $this->select("paylasimlar","PaylasimId='$Id' and RezerveEdilme='0'","RezerveEdilme");
				if(count($PaylasimKontrol)>0){
					$data["Hata"] = 2; // doğru işlem
					$this->update("paylasimlar","RezerveEdilme='1',RezerveEdenId='$UyeId'","PaylasimId='$Id'");
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