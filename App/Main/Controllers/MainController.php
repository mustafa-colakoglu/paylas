<?php
	namespace Controllers;
	use MS\MSController;
	class Main extends MSController{
		function actionIndex(){
			$this->view("Anasayfa",array("ad" => "abdurrahman"));
		}
	}
?>