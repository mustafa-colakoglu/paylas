<?php
	namespace Models;
	use MS\MSModel;
	class SliderHaberlerModel extends MSModel{
		function Haberler(){
			$data = array();
			$data["Haberler"] = $this->select("haberler","","","ORDER BY HaberId DESC LIMIT 5");
			return $data;
		}
	}
?>