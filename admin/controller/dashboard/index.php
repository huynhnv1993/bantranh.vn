<?php $active='Dashboard';
	$user=$getData_model->get_all('taikhoan');
	$user_num=0;
	if(isset($user)){
		foreach ($user as $key => $value) {
			$user_num=$user_num+1	;
		}
	}
	$product=$getData_model->get_all('sanpham');
	$product_num=0;
	if(isset($product)){
		foreach ($product as $key => $value) {
			$product_num++;
		}
	}
	$order=$getData_model->get_all('donhang');
	$order_num=0;
	if(isset($order)){
		foreach ($order as $key => $value) {
			$order_num++;
		}
	}
	$producer=$getData_model->get_all('ncc');
	$producer_num=0;
	if(isset($producer)){
		foreach ($producer as $key => $value) {
			$producer_num++;
		}
	}
	$material=$getData_model->get_all('chatlieu');
	$material_num=0;
	if(isset($material)){
		foreach ($material as $key => $value) {
			$material_num++;
		}
	}
	$type=$getData_model->get_all('loaisp');
	$type_num=0;
	if(isset($type)){
		foreach ($type as $key => $value) {
			$type_num++;
		}
	}

 ?>
<?php require('template/header.php'); ?>
<?php require('view/dashboard/index.php'); ?>