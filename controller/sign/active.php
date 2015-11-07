<?php
	if(isset($_GET['un']) && isset($_GET['up']))
		{ 
			$username = escape($_GET['un']);
			$pass     = escape($_GET['up']);

			$active = $getData_model->get_a_record('taikhoan','taikhoan',$username);
			if($active != null)
			
				if($active['matkhau'] == $pass)
				{
					$getData_model->update('taikhoan','kichhoat',true,'matk',$active['matk']);
					$khachhang = $getData_model->get_a_record('khachhang','matk',$active['matk']);
					$_SESSION['username'] = $username;
					$_SESSION['makh'] = $khachhang['makh']; 
				

			}

			header("location: index.php");
}


 ?>