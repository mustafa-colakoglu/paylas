<?php
	namespace Controllers;
	use MS\MSController;
	class Hakkinda extends MSController{
		function actionIndex(){
			$this->controller("Header");
			$data = $this->model("HakkindaText")->Hakkinda();
			
			$this->view("Hakkinda",$data);
		}
	}
?>