<?php 
if (isset($_GET['pid'])&&isset($_GET['madh'])) {
	

$pid =escape($_GET['pid']);
$madh=escape($_GET['madh']);
$active="order";
$detail_product=$getData_model->get_a_record('sanpham','masp',$pid);
$detail_product_chatlieu=$getData_model->get_a_record('chatlieu','macl',$detail_product['macl']);
$detail_product_loaisp=$getData_model->get_a_record('loaisp','maloai',$detail_product['maloai']);
$detail_product_ncc=$getData_model->get_a_record('ncc','mancc',$detail_product['mancc']);
$slmua=$getData_model->get_all_record('chitietdh','madh',$madh);
foreach ($slmua as $key => $value) {
	if ($value['masp']==$pid) {
		$sl=$value['sl'];
	}
}

require('view/order/detail_product.php');
}
else show_404();
?>