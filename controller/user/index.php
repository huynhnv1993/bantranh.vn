<?php  
	$title = "Thông tin tài khoản";
	if (isset($_POST['submit'])){
	    $fullname=escape($_POST['fullname']);
	    $addr=escape($_POST['addr']);
	    $tel=escape($_POST['tel']);
	    $email=escape($_POST['email']);
	    $getData_model->update('khachhang','tenkh',$fullname,'makh',$_SESSION['makh']);
	    $getData_model->update('khachhang','diachi',$addr,'makh',$_SESSION['makh']);
	    $getData_model->update('khachhang','sdt',$tel,'makh',$_SESSION['makh']);
	    $getData_model->update('khachhang','email',$email,'makh',$_SESSION['makh']);
	}
	$bill = $getData_model->get_all_record('donhang','makh',$_SESSION['makh']);
	$ngaylap=array();
	$tensp=array();
	$image=array();
	$soluong=array();
	$trangthai=array();
	$leng=0;
	$i=0;
	if ($bill!=null) {
		foreach ($bill as $key => $value) {
			$bill_info = $getData_model->get_all_record('chitietdh','madh',$value['madh'],'*');
			foreach ($bill_info as $key => $value1) {
				$leng++;
				$sp_info = $getData_model->get_a_record('sanpham','masp',$value1['masp']);
				$tensp[]=$sp_info['tensp'];
				$hinhanh = 'asset/img/product/'.$sp_info['masp'].'.jpg';
				$image[]=$hinhanh;
				$soluong[]=$value1['sl'];
				$ngaylap[]=$value['ngaylap'];
				$trangthai[]=$value['trangthai'];

			}
		}
	}
	$user = $getData_model->get_a_record('khachhang','makh',$_SESSION['makh']);
	$account = $getData_model->get_a_record('taikhoan','taikhoan',$_SESSION['username']);

		

	require('view/user/index.php');

?>
