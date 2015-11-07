<?php
	$active="material"; 
if (isset($_POST['submit'])) {
	$tencl=escape($_POST['tencl']);
	$macl=escape($_GET['macl']);
	
	$getData_model->update('chatlieu','tencl',$tencl,'macl',$macl);
	$success= 'Thay đổi thành công';
	$chatlieu=$getData_model->get_a_record('chatlieu','macl',$macl);
	require('view/material/change.php');
}

elseif (isset($_GET['macl'])) {
	$macl=escape($_GET['macl']);
	$chatlieu = $getData_model->get_a_record('chatlieu','macl',$macl);
	require('view/material/change.php');
	}else show_404();
	

 ?>