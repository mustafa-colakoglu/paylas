<?php
	namespace Models;
	use MS\MSModel;
	class HakkindaTextModel extends MSModel{
		function Hakkinda(){
			$Hakkinda = $this->select("sitedetay");
			if(count($Hakkinda)>0){
				$data["Hakkinda"] = $Hakkinda[0]["Hakkinda"];
			}
			else{
				$data["Hakkinda"] = "Bu site hakkında bilgi yok.";
			}
			return $data;
		}
	}
?>