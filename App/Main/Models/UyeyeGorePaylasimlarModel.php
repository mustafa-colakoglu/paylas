<?php
	namespace Models;
	use MS\MSModel;
	class UyeyeGorePaylasimlarModel extends MSModel{
		function Paylasimlar(){
			$data = array();
			$Uye = $this->model("LogInOut")->GetLoginedUser();
			$Uye = $Uye["UyeBilgileri"][0];
			$UyeId = $Uye["UyeId"];
			$data["Paylasimlar"] = $this->select("ihtiyaclar","","paylasimlar.*,ihtiyaclar.*","INNER JOIN paylasimlar ON ihtiyaclar.SahipId='$UyeId' and ihtiyaclar.Alinma='0' and ihtiyaclar.KategoriId=paylasimlar.KategoriId and ihtiyaclar.IlId=paylasimlar.IlId and paylasimlar.RezerveEdilme='0'");
			return $data;
		}
	}
?>