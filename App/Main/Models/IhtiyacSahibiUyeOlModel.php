<?php
	namespace Models;
	use MS\MSModel;
	class IhtiyacSahibiUyeOlModel extends MSModel{
		function Kaydet(){
			$data["Kaydet"] = 0;
			$data["HataMesaji"] = "";
			if($_POST){
				if(isset($_POST["KullaniciAdi"])){
					$KullaniciAdi = $_POST["KullaniciAdi"];
					$KullaniciAdi2 = $this->KullaniciAdinaCevir($KullaniciAdi);
				}
			}
			return $data;
		}
		function KullaniciAdinaCevir($K){
			strtolower(str_replace(array(" ","ç","ð","ý","ö","þ","ü","Ç","Ð","Ý","Ö","Þ","Ü"),array("_","c","g","i","o","s","u","c","g","i","o","s","u"),$ilan["Veren"]));
		}
	}
?>