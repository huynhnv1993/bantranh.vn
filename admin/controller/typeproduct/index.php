<?php
  if (isset($_GET['rule'])&& isset($_GET['maloai'])) {
    if ($_GET['rule']=='delete') {
      $maloai=escape($_GET['maloai']);
      $getData_model->delete('loaisp','maloai',$maloai);
      $getData_model->delete('sanpham','maloai',$maloai);
    }
  }
	$active='typeproduct';
 ?>
<?php
  $limit = 9;
  $url = 'index.php?controller=typeproduct';
  $total_rows = $getData_model->get_number_recored('loaisp');
  $total = ceil($total_rows/$limit);
  $total = $total > 0 ? $total : 0;
  if(isset($_GET['page']))
   {
    $page = $_GET['page'] >0 ? $_GET['page'] : 1;
    $page = $_GET['page'] <= $total ? $_GET['page'] : 1;
   }
  else $page = 1;
$offset = ($page -1) *$limit;
   $types = $getData_model->get_from_to('loaisp',$offset,$limit,null,null);
   
   $pagination = pagination($url,$page,$total);
   require('view/typeproduct/index.php');
   ?>