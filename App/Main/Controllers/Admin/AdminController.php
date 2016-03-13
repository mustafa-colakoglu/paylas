<?php
	namespace Controllers\Admin;
	use MS\MSController;
	use MS\Acl;
	class Admin extends MSController{
		function __construct(){
			parent::__construct();
			$this->acl = new Acl(array(
				array(
					"actions" => array(
					"actionIndex",
					"GenelBakis",
					"Paylasilanlar",
					"UyeKontrol",
					"KategoriEkle",
					"HaberEkle",
					"Hakkinda",
					"KullaniciIslemleri"
					),
					"expression" => $this->model("LogInOut")->IsLogin() and $this->model("LogInOut")->AdminMi(),
					"redirect" => "Admin/Giris"
				),
				array(
					"actions" => array("Giris"),
					"expression" => !$this->model("LogInOut")->IsLogin(),
					"redirect" => "Admin/GenelBakis"
				)
			));
		}
		function actionIndex(){
			header("Location:".$this->site."/Admin/GenelBakis");
		}
		function Giris(){
			if($_POST){
				if(isset($_POST["KullaniciAdi"])){
					$KullaniciAdi = $_POST["KullaniciAdi"];
					$KullaniciAdi = strtolower(str_replace(array(" ","ç","ð","ý","ö","þ","ü","Ç","Ð","Ý","Ö","Þ","Ü","'",'"'),array("_","c","g","i","o","s","u","c","g","i","o","s","u","",""),$KullaniciAdi));
				}
				else{
					$KullaniciAdi = false;
				}
				if(isset($_POST["Sifre"])){
					$Sifre = md5(md5($_POST["Sifre"]));
				}
				else{
					$Sifre = false;
				}
				if($KullaniciAdi and $Sifre){
					if($this->model("LogInOut")->Login($KullaniciAdi,$Sifre)){
						header("Location:".$this->site."/Admin");
					}
				}
			}
			$this->view("Admin/Giris");
		}
		function GenelBakis(){
			$this->view("Admin/Header");
			$this->view("Admin/SolMenu");
		}
		function Paylasilanlar(){
			
		}
	}
?>