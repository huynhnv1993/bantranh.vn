<?php
   if (!empty($_POST)) {
   	foreach ($_POST['number'] as $pid => $number) {
   	     $slt = $cart_model->cart_update($pid, ceil($number));;
   		if($slt!=false){
   		    $getData_model->update('sanpham','slton',$slt,'masp',$pid);
            }
   		}
      header('location:index.php?controller=cart');
    }

   $title = "Giỏ Hàng";
   $cart = $cart_model->cart_list();
   
   require('view/cart/index.php');
    ?>