<?php
  if (isset($_GET['rule'])&& isset($_GET['masp'])) {
    if ($_GET['rule']=='delete') {
      $masp=escape($_GET['masp']);
      $getData_model->delete('sanpham','masp',$masp);
      $filename='../asset/img/product/'.$_GET['masp'].'.jpg';
      unlink($filename);
    }
  }
	$active='product';
 ?>
<?php
  $limit = 9;
  $url = 'index.php?controller=product';
  $total_rows = $getData_model->get_number_recored('sanpham');
  $total = ceil($total_rows/$limit);
  $total = $total > 0 ? $total : 0;
  if(isset($_GET['page']))
   {
    $page = $_GET['page'] >0 ? $_GET['page'] : 1;
    $page = $_GET['page'] <= $total ? $_GET['page'] : 1;
   }
  else $page = 1;
$offset = ($page -1) *$limit;
   $products = $getData_model->get_from_to('sanpham',$offset,$limit,null,null);
   
   $pagination = pagination($url,$page,$total);
   require('view/product/index.php');
   //$a= $_GET['macl'];
   ?>