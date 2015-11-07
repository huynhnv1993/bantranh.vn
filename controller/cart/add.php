<?php
   $pid =escape($_GET['pid']);
   if($product_model->checkSP($pid))
       {
           $slt = $cart_model->cart_add($pid);
           if(!$slt)
               {
               header('location:index.php?controller=product');
               }
           else 
           {   $getData_model->update('sanpham','slton',$slt,'masp',$pid);
               header('location:index.php?controller=cart');
               }
       }
   else
      header('location:index.php?controller=product');
   
   ?>