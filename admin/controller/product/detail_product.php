<?php 
if (isset($_GET['pid']) && isset($_GET['macl']) && isset($_GET['mancc'])) {
	$pid =escape($_GET['pid']);
	$macl=escape($_GET['macl']);
	$mancc=escape($_GET['mancc']);
	$active="product";
	$detail_product=$getData_model->get_a_record_x('sanpham','masp',$pid,'macl',$macl,'mancc',$mancc);
	$detail_product_chatlieu=$getData_model->get_a_record('chatlieu','macl',$detail_product['macl']);
	$detail_product_loaisp=$getData_model->get_a_record('loaisp','maloai',$detail_product['maloai']);
	$detail_product_ncc=$getData_model->get_a_record('ncc','mancc',$detail_product['mancc']);
	$slton=$detail_product['slton'];
	if ($slton>0) {
		$tinhtrang='còn hàng';
	}else $tinhtrang='hết hàng';
	require('view/product/detail_product.php');
}
else show_404();
?>