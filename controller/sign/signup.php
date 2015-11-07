<?php
	$title = "Đăng kí";
	if (isset($_POST['submit'])) {

		$user=escape($_POST['username']);
		$pass=escape($_POST['pass']);
	    $fullname=escape($_POST['fullname']);
	    $addr=escape($_POST['addr']);
	    $tel=escape($_POST['tel']);
	    $email=escape($_POST['email']);
	    $pass = md5($pass);
	    $matk=getOrderCode();
	    $makh=$_SESSION['makh'];
	    $check= $sign_model->checkAvailableAccount($user);
	    if ($check==false) {
	    	$date = gmdate('Y-m-d H:i:s',time() + 7*3600); 
	    	$capdo ='normal';
	    	$taikhoan = array('taikhoan'=>$user, 'matkhau'=>$pass,'matk'=>$matk, 'kichhoat'=>false,'ngaytao'=>$date, 'capdo'=>$capdo);
	    	$khachhang = array('makh'=>$makh, 'tenkh'=>$fullname, 'diachi'=>$addr, 'email'=>$email, 'sdt'=>$tel, 'matk'=>$matk);

	    	$getData_model->save('taikhoan',$taikhoan);
	    	$getData_model->save('khachhang',$khachhang);

	    	$to = $email;
			$name = $fullname;
			$subject = 'Kích hoạt tài khoản của bạn tại bantranh.vn';
			$body = BASEURL.'?controller=sign&action=active&un='.$user.'&up='.$pass;
			$check = sendmail($to,$name,$subject,$body);

			if(!$check)
			{
				$erroup = "Đăng kí thành công <br /> Một email kích hoạt đã được gửi đến email mà bạn đã đăng kí, kích hoạt để đăng nhập";
				unset($_SESSION['makh']);
    			$_SESSION['makh'] = getCustomerCode();
				require('view/sign/dangki.php');
			}
			else
			{
				
	    		header('location:'.BASEURL);
			}

	    }
	    else{
	    		$erroup = "Tài khoản đã tồn tại. Mời bạn nhập tài khoản khác";
				require('view/sign/dangki.php');
	    	}
	    }
		else
				require('view/sign/dangki.php');
	
			$erroup =null;
?>