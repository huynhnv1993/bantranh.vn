<?php
  if (isset($_GET['rule'])&& isset($_GET['mancc'])) {
    if ($_GET['rule']=='delete') {
      $mancc=escape($_GET['mancc']);
      $getData_model->delete('sanpham','mancc',$mancc);
      $getData_model->delete('ncc','mancc',$mancc);
    }
  }
	$active='producer';
 ?>
<?php
  $limit = 9;
  $url = 'index.php?controller=producer';
  $total_rows = $getData_model->get_number_recored('ncc');
  $total = ceil($total_rows/$limit);
  $total = $total > 0 ? $total : 0;
  if(isset($_GET['page']))
   {
    $page = $_GET['page'] >0 ? $_GET['page'] : 1;
    $page = $_GET['page'] <= $total ? $_GET['page'] : 1;
   }
  else $page = 1;
$offset = ($page -1) *$limit;
   $producers = $getData_model->get_from_to('ncc',$offset,$limit,null,null);
   
   $pagination = pagination($url,$page,$total);
   require('view/producer/index.php');
   ?>