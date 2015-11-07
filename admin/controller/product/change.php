<?php
	$active="product"; 
if (isset($_POST['submit'])) {
	$tensp=escape($_POST['tensanpham']);
	$tencl=escape($_POST['tencl']);
	$tenloai=escape($_POST['tenloai']);
	$tenncc=escape($_POST['tenncc']);
	$kichthuoc=escape($_POST['kichthuoc']);
	$dongia=escape($_POST['dongia']);
	$slton=escape($_POST['slton']);
	$mota=escape($_POST['mota']);
	$masp=escape($_GET['masp']);

	$macl=$getData_model->get_a_record('chatlieu','tencl',$tencl);
	$maloai=$getData_model->get_a_record('loaisp','tenloai',$tenloai);
	$mancc=$getData_model->get_a_record('ncc','tenncc',$tenncc);
	
	$getData_model->update('sanpham','tensp',$tensp,'masp',$masp);
	$getData_model->update('sanpham','macl',$macl['macl'],'masp',$masp);
	$getData_model->update('sanpham','maloai',$maloai['maloai'],'masp',$masp);
	$getData_model->update('sanpham','mancc',$mancc['mancc'],'masp',$masp);
	$getData_model->update('sanpham','kichthuoc',$kichthuoc,'masp',$masp);
	$getData_model->update('sanpham','slton',$slton,'masp',$masp);
	$getData_model->update('sanpham','mota',$mota,'masp',$masp);
	$success= 'Thay đổi thành công';
}

	if (isset($_GET['masp'])) {
	$masp=escape($_GET['masp']);
	$sp = $getData_model->get_a_record('sanpham','masp',$masp);
}else $sp =null;
	$loaisp=$getData_model->get_all('loaisp');
	$chatlieu=$getData_model->get_all('chatlieu');
	$ncc=$getData_model->get_all('ncc');
	foreach ($chatlieu as $key => $value) {
		if ($value['macl']==$sp['macl']) {
			$tenchatlieu=$value['tencl'];
			unset($chatlieu[$key]);
		}
	}
	foreach ($loaisp as $key => $value) {
		if ($value['maloai']==$sp['maloai']) {
			$tenloaisp=$value['tenloai'];
			unset($loaisp[$key]);
		}
	}
	foreach ($ncc as $key => $value) {
		if ($value['mancc']==$sp['mancc']) {
			$tenncc=$value['tenncc'];
			unset($ncc[$key]);
		}
	}
	if (!isset($tenncc)) {
		$tenncc=$tenloaisp=$tenchatlieu=null;
	}
require('view/product/change.php');
 ?>