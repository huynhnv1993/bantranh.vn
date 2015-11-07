<?php
   //load model
   
   //data
   $title = 'Đơn hàng';
   $cart = $cart_model->cart_list();
   
   if (empty($cart)) {
   	header('location:.');
   }
   
   //load view
   if(!$sign_model->checkUserFirst($_SESSION['makh']))
   require('view/cart/customer_order.php');
   else
   {
   $user = $getData_model->get_a_record('khachhang','makh',$_SESSION['makh']);
   require('view/cart/user_order.php');
   }
   ?>