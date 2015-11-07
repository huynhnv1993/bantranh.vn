<?php
	$active="typeproduct"; 
if (isset($_POST['submit'])) {
	$tenloai=escape($_POST['tenloai']);
	$maloai=escape($_GET['maloai']);
	
	$getData_model->update('loaisp','tenloai',$tenloai,'maloai',$maloai);
	$success= 'Thay đổi thành công';
	$type=$getData_model->get_a_record('loaisp','maloai',$maloai);
	require('view/material/change.php');
}

elseif (isset($_GET['maloai'])) {
	$maloai=escape($_GET['maloai']);
	$type = $getData_model->get_a_record('loaisp','maloai',$maloai);
	require('view/typeproduct/change.php');
	}else show_404();
	

 ?>