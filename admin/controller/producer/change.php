<?php
	$active="producer"; 
if (isset($_POST['submit'])) {
	$tenncc=escape($_POST['tenncc']);
	$diachi=escape($_POST['diachi']);
	$email=escape($_POST['email']);
	$sdt=escape($_POST['sdt']);

	$mancc=escape($_GET['mancc']);

	
	$getData_model->update('ncc','tenncc',$tenncc,'mancc',$mancc);
	$getData_model->update('ncc','diachi',$diachi,'mancc',$mancc);
	$getData_model->update('ncc','email',$email,'mancc',$mancc);
	$getData_model->update('ncc','sdt',$sdt,'mancc',$mancc);
	$success= 'Thay đổi thành công';
	$ncc=$getData_model->get_a_record('ncc','tenncc',$tenncc);
	require('view/producer/change.php');
}

elseif (isset($_GET['mancc'])) {
	$mancc=escape($_GET['mancc']);
	$ncc = $getData_model->get_a_record('ncc','mancc',$mancc);
	require('view/producer/change.php');
	}else show_404();
	

 ?>