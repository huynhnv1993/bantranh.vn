<?php
if(isset($_GET['pid']))
{
	$pid = escape($_GET['pid']);
	$slt = $cart_model->cart_delete($pid);
	$getData_model->update('sanpham','slton',$slt,'masp',$pid);
}
	header('location:index.php?controller=cart');
?>