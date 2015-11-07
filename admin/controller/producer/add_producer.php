<?php
	$active="producer";
	$mancc=$tenncc=$diachi=$email=$sdt='';
if (isset($_POST['submit'])) {
	$mancc=escape($_POST['mancc']);
	$tenncc=escape($_POST['tenncc']);
	$diachi=escape($_POST['diachi']);
	$email=escape($_POST['email']);
	$sdt=escape($_POST['sdt']);
	$mancc1=$getData_model->get_a_record('ncc','mancc',$mancc);
	$ncc = array('mancc'=>$mancc, 'tenncc'=>$tenncc,'diachi'=>$diachi, 'email'=>$email,'sdt'=>$sdt);
	if($mancc!=$mancc1['mancc']){
	$getData_model->save('ncc',$ncc);
	$success="Thêm thành công";
	}else{ $success="Đã tồn tại mã nhà cung cấp";}
}else $ncc=null;
require('view/producer/add_producer.php');
 ?>