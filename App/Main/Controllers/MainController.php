<?php
	namespace Controllers;
	use MS\MSController;
	class Main extends MSController{
		function actionIndex(){
			$this->controller("Header");
			$this->controller("MainSection");
			$this->controller("Footer");
		}
	}
?>