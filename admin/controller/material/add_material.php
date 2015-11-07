<?php
	$active="material";
	$macl=$tencl='';
if (isset($_POST['submit'])) {
	$macl=escape($_POST['macl']);
	$tencl=escape($_POST['tencl']);
	$macl1=$getData_model->get_a_record('chatlieu','macl',$macl);
	$chatlieu = array('macl'=>$macl, 'tencl'=>$tencl);
	if($macl!=$macl1['macl']){
	$getData_model->save('chatlieu',$chatlieu);
	$success="Thêm thành công";
	}else{ $success= "Đã tồn tại mã chất liệu";}
}else $chatlieu=null;
require('view/material/add_material.php');
 ?>