<?php
	$active="typeproduct";
	$maloai=$tenloai='';
if (isset($_POST['submit'])) {
	$maloai=escape($_POST['maloai']);
	$tenloai=escape($_POST['tenloai']);
	$maloai1=$getData_model->get_a_record('loaisp','maloai',$maloai);
	$type = array('maloai'=>$maloai, 'tenloai'=>$tenloai);
	if($maloai!=$maloai1['maloai']){
	$getData_model->save('loaisp',$type);
	$success="Thêm thành công";
	}else{ $success= "Đã tồn tại mã loại sản phẩm";}
}else $type=null;
require('view/typeproduct/add_type.php');
 ?>