<?php
class Search extends getData{
	
	function search_data($search_dt){
		$data =$this->get_all('sanpham');
		$data_search = array();
		$search='/'.strU($search_dt).'/';
		foreach ($data as $value){
			if(preg_match($search,strU($value['masp']))==TRUE ||
				preg_match($search,strU($value['kichthuoc']))==TRUE ||
				preg_match($search,strU($value['dongia']))==TRUE ||
				preg_match($search,strU($value['tensp']))==TRUE 
				)
			{
				$data_search[]=$value;				  
			}
		}
		return $data_search;
	}
}
?>