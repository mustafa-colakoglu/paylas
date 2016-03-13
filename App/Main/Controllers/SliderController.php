<?php
	namespace Controllers;
	use MS\MSController;
	class Slider extends MSController{
		function actionIndex(){
			$data = $this->model("SliderHaberler")->Haberler();
			$this->view("Slider",$data);
		}
	}
?>