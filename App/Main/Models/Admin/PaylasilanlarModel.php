<?php
	namespace Models\Admin;
	use MS\MSModel;
	class PaylasilanlarModel extends MSModel{
		function Paylasilan(){
			$data["Paylasilanlar"] = $this->select("paylasimlar","Verilme='1'","","ORDER BY PaylasimId DESC LIMIT 10");
			return $data;
		}
	}
?>