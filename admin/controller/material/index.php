<?php
  if (isset($_GET['rule'])&& isset($_GET['macl'])) {
    if ($_GET['rule']=='delete') {
      $macl=escape($_GET['macl']);
      $getData_model->delete('chatlieu','macl',$macl);
      $getData_model->delete('sanpham','macl',$macl);
    }
  }
	$active='material';
 ?>
<?php
  $limit = 9;
  $url = 'index.php?controller=material';
  $total_rows = $getData_model->get_number_recored('chatlieu');
  $total = ceil($total_rows/$limit);
  $total = $total > 0 ? $total : 0;
  if(isset($_GET['page']))
   {
    $page = $_GET['page'] >0 ? $_GET['page'] : 1;
    $page = $_GET['page'] <= $total ? $_GET['page'] : 1;
   }
  else $page = 1;
$offset = ($page -1) *$limit;
   $materials = $getData_model->get_from_to('chatlieu',$offset,$limit,null,null);
   
   $pagination = pagination($url,$page,$total);
   require('view/material/index.php');
   ?>