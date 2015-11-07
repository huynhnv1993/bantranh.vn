<?php
//load
//show du lieu
$active='product';
	if(!isset($_POST['search_input']))
		$search_input = " ";
	else
	{
		$search_input = $_POST['search_input'];
	}
	//$title="Search";
	$products_search = $search_model->search_data($search_input);


   $limit = 9;
   $url = 'index.php?controller=search';
   $total_rows = count($products_search);
   $total = ceil($total_rows/$limit);
   $total = $total > 0 ? $total : 0;
   if(isset($_GET['page']))
       {
       $page = $_GET['page'] >0 ? $_GET['page'] : 1;
       $page = $_GET['page'] <= $total ? $_GET['page'] : 1;
       }
   else $page = 1;
	$offset = ($page -1) *$limit;
   $products = array();
   for($i=0;$i<9;$i++)
   
   		if($offset+1 > $total_rows)
   			break;
   		else
   		{
   		$products[$i] = $products_search[$offset++]; 
   		}
   	
   //$themes = $getData_model->get_all('loaisp');
   //$materials = $getData_model->get_all('chatlieu');
   //$provider = $getData_model->get_all('ncc');
   $pagination = pagination($url,$page,$total);

	require('view/search/index.php');
?>