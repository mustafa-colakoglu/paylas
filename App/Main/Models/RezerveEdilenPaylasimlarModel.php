<?php
	namespace Models;
	use MS\MSModel;
	class RezerveEdilenPaylasimlarModel extends MSModel{
		public $Uye;
		function __construct(){
			parent::__construct();
			$Uye = $this->model("LogInOut")->GetLoginedUser();
			$this->Uye = $Uye["UyeBilgileri"][0];
		}
		function Paylasimlar(){
			$data = array();
			$UyeId = $this->Uye["UyeId"];
			$data["Paylasimlar"] = $this->select("paylasimlar","","paylasimlar.*,uyeler.*","INNER JOIN uyeler ON uyeler.UyeId=paylasimlar.RezerveEdenId and paylasimlar.PaylasanId='$UyeId' and paylasimlar.RezerveEdilme='1' and paylasimlar.Verilme='0'");
			return $data;
		}
		function Verildi(){
			$PaylasimId = intval($this->url[2]);
			$UyeId = $this->Uye["UyeId"];
			if($PaylasimId == 0){
				header("Location:".$this->site."/RezerveEdilenPaylasimlar");
				exit;
			}
			$Paylasim = $this->select("paylasimlar","","paylasimlar.*,uyeler.*","INNER JOIN uyeler ON uyeler.UyeId=paylasimlar.RezerveEdenId and paylasimlar.PaylasanId='$UyeId' and paylasimlar.RezerveEdilme='1'");
			if(count($Paylasim)<=0){
				header("Location:".$this->site."/RezerveEdilenPaylasimlar");
				exit;
			}
			$Paylasim = $Paylasim[0];
			$VerenId = $Paylasim["PaylasanId"];
			$AlanId = $Paylasim["RezerveEdenId"];
			$PaylasimId = $Paylasim["PaylasimId"];
			$IhtiyacId = $Paylasim["VerilenIhtiyacId"];
			$this->update("paylasimlar","VerilenId='$AlanId',VerilenIhtiyacId='$IhtiyacId'","PaylasimId='$PaylasimId'");
			$Ihtiyac = $this->select("ihtiyaclar","IhtiyacId='$IhtiyacId'");
			$Ihtiyac = $Ihtiyac[0];
			$Bildirim = '<b>'.$Ihtiyac["Baslik"].'</b> adlı ihtiyacınızı temin ettiyseniz <a href="'.$this->site.'/RezerveEttiginizPaylasimlar/Alindi/'.$PaylasimId.'"> buraya </a> tıklayarak onaylayabilirsiniz.';
			$this->insert("bildirimler",false,"'','$AlanId','$Bildirim','0'");
			header("Location:".$this->site."/RezerveEdilenPaylasimlar");
		}
		function Verilmedi(){
			$PaylasimId = intval($this->url[2]);
			$UyeId = $this->Uye["UyeId"];
			if($PaylasimId == 0){
				header("Location:".$this->site."/RezerveEdilenPaylasimlar");
				exit;
			}
			$Paylasim = $this->select("paylasimlar","","paylasimlar.*,uyeler.*","INNER JOIN uyeler ON uyeler.UyeId=paylasimlar.RezerveEdenId and paylasimlar.PaylasanId='$UyeId' and paylasimlar.RezerveEdilme='1'");
			if(count($Paylasim)<=0){
				header("Location:".$this->site."/RezerveEdilenPaylasimlar");
				exit;
			}
			$this->update("paylasimlar","Verilme='0',VerilenId='0',VerilenIhtiyacId='0',RezerveEdilme='0',RezerveEdenId='0'");
			header("Location:".$this->site."/RezerveEdilenPaylasimlar");
		}
	}
?>