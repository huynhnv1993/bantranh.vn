<?php 
	$themes = $getData_model->get_all('loaisp');
	$materials = $getData_model->get_all('chatlieu');
   	$provider = $getData_model->get_all('ncc');
   	$title = "Hướng dẫn mua hàng";
	require('view/guider/index.php');
 ?>