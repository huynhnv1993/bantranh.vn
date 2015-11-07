<?php 
	if (isset($_GET['rule'])) {
		if ($_GET['rule']=='up') {
			$getData_model->update('taikhoan','capdo','admin','taikhoan',$_GET['user']);
		}
		if ($_GET['rule']=='delete') {
			$getData_model->delete('taikhoan','taikhoan',$_GET['user']);
		}
		if ($_GET['rule']=='down') {
			$getData_model->update('taikhoan','capdo','normal','taikhoan',$_GET['user']);
		}
	}
	$users=$getData_model->get_all('taikhoan');
	$active='user';
	$s=null;
	$customer=$getData_model->get_all_record('khachhang','matk',$s);
 ?>

<?php require ('view/user/index.php') ?>