<?php
   $limit = 9;
   $url = 'index.php?controller=product';
   $total_rows = $getData_model->get_number_recored('sanpham');
   $total = ceil($total_rows/$limit);
   $total = $total > 0 ? $total : 0;
   if(isset($_GET['page']))
       {
       $page = $_GET['page'] >0 ?$_GET['page'] : 1;
       $page = $_GET['page'] <= $total ? $_GET['page'] : 1;
       }
   else $page = 1;
  $offset = ($page -1) *$limit;
   
   $themes = $getData_model->get_all('loaisp');
   $materials = $getData_model->get_all('chatlieu');
   $provider = $getData_model->get_all('ncc');
   if(isset($_GET['maloai']))
   {
   $products = $getData_model->get_from_to('sanpham',$offset,$limit,'maloai',escape($_GET['maloai']));
   }
   else if(isset($_GET['chatlieu']))
   {
    $products = $getData_model->get_from_to('sanpham',$offset,$limit,'macl',escape($_GET['chatlieu']));
   }
   else if(isset($_GET['ncc']))
   {
   $products = $getData_model->get_from_to('sanpham',$offset,$limit,'mancc',escape($_GET['ncc']));
   }
   else
   $products = $getData_model->get_from_to('sanpham',$offset,$limit,null,null);
   arsort($products);
   $pagination = pagination($url,$page,$total);
   require('view/product/index.php');
   ?>