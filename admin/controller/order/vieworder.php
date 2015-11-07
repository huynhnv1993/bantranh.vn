<?php 
if (isset($_GET['madh'])) {
	$madh=escape($_GET['madh']);
	$active="order";
	$detail_order=$getData_model->get_all_record('chitietdh','madh',$madh);
	$temp=array();
	$details=array();
	$tien=$getData_model->get_a_record('donhang','madh',$madh);
	if ($tien['trangthai']=='dangcho') {
		$tongtien='Tổng tiền cần trả: '.$tien['tonggia'].'vnd';
	}else $tongtien='Đã thanh toán!'.$tien['tonggia'].'vnd';
	$kh=$getData_model->get_a_record('khachhang','makh',$tien['makh']);
	foreach ($detail_order as $key => $value) {
		$detail_sp=$getData_model->get_a_record('sanpham','masp',$value['masp']);
		$detail_sp_cl=$getData_model->get_a_record('chatlieu','macl',$detail_sp['macl']);
		$detail_sp_loai=$getData_model->get_a_record('loaisp','maloai',$detail_sp['maloai']);
		$detail_sp_ncc=$getData_model->get_a_record('ncc','mancc',$detail_sp['mancc']);
		$temp['tencl']=$detail_sp_cl['tencl'];
		$temp['tenloai']=$detail_sp_loai['tenloai'];
		$temp['masp']=$value['masp'];
		$temp['tenncc']=$detail_sp_ncc['tenncc'];
		$temp['tensp']=$detail_sp['tensp'];
		$temp['dongia']=$detail_sp['dongia'];
		$temp['sl']=$value['sl'];
		$details[]=$temp;
	}
require('view/order/vieworder.php');
}
else show_404();
?>