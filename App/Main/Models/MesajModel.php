<?php
	namespace Models;
	use MS\MSModel;
	use Form;
	class MesajModel extends MSModel{
		public $YeniMesajKonular;
		function __construct(){
			parent::__construct();
			$Uye = $this->model("LogInOut")->GetLoginedUser();
			$Uye = $Uye["UyeBilgileri"][0];
			$UyeId = $Uye["UyeId"];
			$this->UyeId = $UyeId;
			$this->YeniMesajKonular = $this->select("mesaj_konular","((GonderenId='$UyeId' and GonderenOkuma='0') or (AlanId='$UyeId' and AlanOkuma='0')) and EnsonGonderenId!='$UyeId'");
			$this->TumKonular = $this->GetTumMesajlar();
		}
		function MesajSayi(){
			return count($this->YeniMesajKonular);
		}
		function MesajGonder($From = false, $To = false,$Mesaj = false){
			if($From and $To and $Mesaj){
				if($From == $To){
					return false;
				}
				else if(empty($From) or empty($To) or empty($Mesaj)){
					return false;
				}
				$UyeId = $this->UyeId;
				$Konu = array();
				$Uye1 = $this->select("uyeler","UyeId='$From'","KullaniciAdi");
				$Uye1 = $Uye1[0]["KullaniciAdi"];
				$Uye2 = $this->select("uyeler","UyeId='$To'","KullaniciAdi");
				$Uye2 = $Uye2[0]["KullaniciAdi"];
				$Konu["Uye-".$From] = $Uye1;
				$Konu["Uye-".$To] = $Uye2;
				$Konu = json_encode($Konu);
				$KonuVarmi = $this->select("mesaj_konular","GonderenId='$UyeId' or AlanId='$UyeId'");
				$Tarih=date("d.m.Y");
				$Saat=date("H.i.s");
				$Time=time();
				if(count($KonuVarmi)>0){
					$KonuId = $KonuVarmi[0]["KonuId"];
					$this->insert("mesaj_mesajlar",false,"'','$KonuId','$Mesaj','$From','$To','$Tarih','$Saat','$Time'");
					if($this->lastInsertId()){
						$KonuBilgileri = $KonuVarmi[0];
						if($KonuBilgileri["GonderenId"] == $UyeId){
							$GonderenId = $UyeId;
							$AlanId = $KonuBilgileri["AlanId"];
						}
						else if($KonuBilgileri["AlanId"] == $UyeId){
							$GonderenId = $KonuBilgileri["AlanId"];
							$AlanId = $KonuBilgileri["GonderenId"];
						}
						if($KonuBilgileri["GonderenId"] == $UyeId){
							$this->update("mesaj_konular","GonderenOkuma='1',AlanOkuma='0',EnsonGonderenId='$UyeId',GonderenTime='$Time',AlanTime='$Time'","KonuId='$KonuId'");
						}
						else{
							$this->update("mesaj_konular","GonderenOkuma='0',AlanOkuma='1',EnsonGonderenId='$UyeId',GonderenTime='$Time',AlanTime='$Time'","KonuId='$KonuId'");
						}
					}
				}
				else{
					$this->insert("mesaj_konular",false,"'','$Konu','$From','$To','1','0','$From','$Tarih','$Time','$Time'");
					if($this->lastInsertId()){
						$Last = $this->lastInsertId();
						$this->insert("mesaj_mesajlar",false,"'','$Last','$Mesaj','$From','$To','$Tarih','$Saat','$Time'");
					}
				}
				return true;
			}
			return false;
		}
		function IlkMesaj(){
			$From = $this->UyeId;
			$To = intval($this->url[1]);
			$data["Gonderilme"] = 0;
			if($From == $To){
				return false;
			}
			if($_POST){
				$Mesaj = $this->Uselib->formDataFix(Form::post("Mesaj"));
				if(!empty($Mesaj)){
					$this->MesajGonder($From, $To, $Mesaj);
					$data["Gonderilme"] = 1;
				}
			}
			return $data;
		}
		function MesajlariOku(){
			$KonuId = intval($this->url[2]);
			$UyeId = $this->UyeId;
			$data = array();
			if($KonuId > 0){
				$KonuKontrol = $this->select("mesaj_konular","KonuId='$KonuId' and (GonderenId='$UyeId' or AlanId='$UyeId')");
				if(count($KonuKontrol)>0){
					$KonuBilgileri = $KonuKontrol[0];
					$Uyeler = array();
					$Uye1Id = $KonuBilgileri["GonderenId"];
					$Uye2Id = $KonuBilgileri["AlanId"];
					$Uyeler = json_decode($KonuBilgileri["Konu"], 1);
					$data["Uyeler"] = $Uyeler;
					$time = time();
					if($KonuBilgileri["GonderenId"] == $UyeId){
						$this->update("mesaj_konular","GonderenOkuma='1'","KonuId='$KonuId'");
					}
					else{
						$this->update("mesaj_konular","AlanOkuma='1'","KonuId='$KonuId'");
					}
					$data["Mesajlar"] = $this->select("mesaj_mesajlar","KonuId='$KonuId'","","ORDER BY MesajId DESC LIMIT 5");
				}
				else{
					echo "mesajlar sizi ilgilendirmiyor";
				}
			}
			return $data;
		}
		function YeniMesajGonder(){
			$KonuId = intval($this->url[2]);
			$From = $this->UyeId;
			if($KonuId > 0){
				$KonuBilgileri = $this->select("mesaj_konular","KonuId='$KonuId' and (GonderenId='$From' or AlanId='$From')");
				if(count($KonuBilgileri) > 0){
					$Mesaj = $this->Uselib->formDataFix(Form::post("Mesaj"));
					$KonuBilgileri = $KonuBilgileri[0];
					if($KonuBilgileri["GonderenId"] == $From){
						$To = $KonuBilgileri["AlanId"];
					}
					else{
						$To = $KonuBilgileri["GonderenId"];
					}
					if(!empty($Mesaj)){
						$this->MesajGonder($From, $To, $Mesaj);
					}
				}
			}
		}
		function GetTumMesajlar(){
			$UyeId = $this->UyeId;
			$YeniMesajlarGonderilen = $this->TimeEkle($this->select("mesaj_konular","GonderenId='$UyeId' and GonderenOkuma='0' and EnsonGonderenId!='$UyeId'","","ORDER BY GonderenTime DESC"),"GonderenTime");
			$YeniMesajlarAlan = $this->TimeEkle($this->select("mesaj_konular","AlanId='$UyeId' and AlanOkuma='0' and EnsonGonderenId!='$UyeId'","","ORDER BY AlanTime DESC"),"AlanTime");
			$EskiMesajlarGonderilen = $this->TimeEkle($this->select("mesaj_konular","GonderenId='$UyeId' and GonderenOkuma='1'","","ORDER BY GonderenTime DESC"),"GonderenTime");
			$EskiMesajlarAlan = $this->TimeEkle($this->select("mesaj_konular","AlanId='$UyeId' and AlanOkuma='1'","","ORDER BY AlanTime DESC"),"AlanTime");
			return $this->QuickSort(array_merge($YeniMesajlarGonderilen,$YeniMesajlarAlan,$EskiMesajlarGonderilen,$EskiMesajlarAlan));
		}
		function TimeEkle($Dizi,$AlinacakTime){
			for($i=0;$i<count($Dizi);$i++){
				$Dizi[$i]["Time"] = $Dizi[$i][$AlinacakTime];
			}
			return $Dizi;
		}
		function QuickSort($Dizi){
			if(count($Dizi)<1){
				return $Dizi;
			}
			else{
				$pivot = $Dizi[0]["Time"];
				$left = array();
				$right = array();
				for($i=1;$i<count($Dizi);$i++){
					if($Dizi[$i]["Time"]>$pivot){
						$left[] = $Dizi[$i];
					}
					else{
						$right[] = $Dizi[$i];
					}
				}
				return array_merge($this->QuickSort($left),array($Dizi[0]),$this->QuickSort($right));
			}
		}
	}
?>