
<?php 
if (isset($_GET['pid'])){
	$pid =escape($_GET['pid']);

	$title="Chi tiết sản phẩm";
	$detail_product=$getData_model->get_a_record('sanpham','masp',$pid);
	$detail_product_chatlieu=$getData_model->get_a_record('chatlieu','macl',$detail_product['macl']);
	$detail_product_loaisp=$getData_model->get_a_record('loaisp','maloai',$detail_product['maloai']);
	$detail_product_ncc=$getData_model->get_a_record('ncc','mancc',$detail_product['mancc']);
	$slton=$detail_product['slton'];
	if ($slton>0) {
		$tinhtrang='Còn hàng';
	}else $tinhtrang='Hết hàng';
   	$themes = $getData_model->get_all('loaisp');
	$materials = $getData_model->get_all('chatlieu');
   	$provider = $getData_model->get_all('ncc');
	require('view/product/detail.php');
}
else show_404();
?>