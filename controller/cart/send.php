<?php
   //load model
   //Nếu người đặt hàng không là thành viên
   if(!$sign_model->checkUserFirst($_SESSION['makh']))
   {
   if (!empty($_POST)) {
    $madh = getOrderCode();
   	$khachhang = array(
   		'makh' => $_SESSION['makh'],
   		'tenkh' => escape($_POST['tenkh']),
           'email' => escape($_POST['email']),
   		'diachi' => escape($_POST['diachi']),
   		'sdt' => escape($_POST['sdt']),
   	);
   	 $getData_model->save('khachhang', $khachhang);
       
       $order =array(
               'madh' => $madh,
               'ngaylap' => gmdate('Y-m-d H:i:s',time() + 7*3600),
               'tonggia' =>$cart_model->cart_total(),
               'makh' => $_SESSION['makh'],
               'trangthai' => 'dangcho'
               );
       $getData_model->save('donhang',$order);
   	$cart = $cart_model->cart_list();
   	foreach ($cart as $product) {
   		$chitietdh = array(
   			'madh' => $madh,
   			'masp' => $product['id'],
   			'sl' => $product['number']
   		);
   		$getData_model->save('chitietdh', $chitietdh);
   	}
   
   	$cart_model->cart_destroy();
    unset($_SESSION['makh']);
    $_SESSION['makh'] = getCustomerCode();
    
   	//data
   	$title = 'Đặt hàng thành công';
   
   	//load view
   	require('view/cart/send.php');
   } else {
   	header('location:.');
   }
   }
   //Nếu Người đặt hàng là thành viên
   else
   {
       $order =array(
               'madh' => $madh= getOrderCode(),
               'ngaylap' => gmdate('Y-m-d H:i:s',time() + 7*3600),
               'tonggia' =>$cart_model->cart_total(),
               'makh' => $_SESSION['makh'],
               'trangthai' => 'dangcho'
               );
       $getData_model->save('donhang',$order);
   	$cart = $cart_model->cart_list();
   	foreach ($cart as $product) {
   		$chitietdh = array(
   			'madh' => $madh,
   			'masp' => $product['id'],
   			'sl' => $product['number']
   		);
   		$getData_model->save('chitietdh', $chitietdh);
   	}
   
   	$cart_model->cart_destroy();
   	//data
   	$title = 'Đặt hàng thành công';
   
   	//load view
   	require('view/cart/send.php'); 
   }
   ?>