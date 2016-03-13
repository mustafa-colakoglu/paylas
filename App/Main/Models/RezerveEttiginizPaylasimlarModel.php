<?php
	namespace Models;
	use MS\MSModel;
	class RezerveEttiginizPaylasimlarModel extends MSModel{
		public $Uye;
		function __construct(){
			parent::__construct();
			$Uye = $this->model("LogInOut")->GetLoginedUser();
			$this->Uye = $Uye["UyeBilgileri"][0];
		}
		function Paylasimlar(){
			$data = array();
			$UyeId = $this->Uye["UyeId"];
			$data["Paylasimlar"] = $this->select("paylasimlar","RezerveEdilme='1' and RezerveEdenId='$UyeId' and Verilme='0'");
			return $data;
		}
		function Alindi(){
			$PaylasimId =@intval($this->url[2]);
			if($PaylasimId>0){
				$UyeId = $this->Uye["UyeId"];
				$PaylasimKontrol = $this->select("paylasimlar","","paylasimlar.*,ihtiyaclar.*","INNER JOIN ihtiyaclar ON paylasimlar.RezerveEdenId='$UyeId' and paylasimlar.VerilenIhtiyacId=ihtiyaclar.IhtiyacId and ihtiyaclar.Alinma='0'");
				if(count($PaylasimKontrol)>0){
					$VerenId = $PaylasimKontrol[0]["PaylasanId"];
					$IhtiyacId = $PaylasimKontrol[0]["VerilenIhtiyacId"];
					$PaylasimId = $PaylasimKontrol[0]["PaylasimId"];
					$this->update("ihtiyaclar","Alinma='1',AlinanId='$VerenId',AlinanPaylasimId='$PaylasimId'");
				}
			}
			header("Location:".$this->site."/RezerveEttiginizPaylasimlar");
		}
		function Alinmadi(){
			$PaylasimId =@intval($this->url[2]);
			if($PaylasimId>0){
				$UyeId = $this->Uye["UyeId"];
				$PaylasimKontrol = $this->select("paylasimlar","","paylasimlar.*,ihtiyaclar.*","INNER JOIN ihtiyaclar ON paylasimlar.RezerveEdenId='$UyeId' and paylasimlar.VerilenIhtiyacId=ihtiyaclar.IhtiyacId and ihtiyaclar.Alinma='0'");
				if(count($PaylasimKontrol)>0){
					$IhtiyacId = $PaylasimKontrol[0]["VerilenIhtiyacId"];
					$this->update("ihtiyaclar","Alinma='0',AlinanId='0',AlinanPaylasimId='0'");
				}
			}
			header("Location:".$this->site."/RezerveEttiginizPaylasimlar");
		}
	}
?>