<?php
  if (isset($_GET['stage'])) {
    if ($_GET['stage']=='dangcho') {
      $madh=escape($_GET['madh']);
      $getData_model->update('donhang','trangthai','thanhcong','madh',$madh);
    }
    elseif ($_GET['stage']=='thanhcong') {
      $madh=escape($_GET['madh']);
      $getData_model->update('donhang','trangthai','dangcho','madh',$madh);
    }elseif ($_GET['stage']=='wait') {
      $trangthai='dangcho';
    }elseif ($_GET['stage']=='done') {
      $trangthai='thanhcong';
    }
  }

	$active='order';
 ?>
<?php
  $i=1;
  $limit = 9;
  $url = 'index.php?controller=order';
  $total_rows = $getData_model->get_number_recored('donhang');
  $total = ceil($total_rows/$limit);
  $total = $total > 0 ? $total : 0;
  if(isset($_GET['page']))
   {
    $page = $_GET['page'] >0 ? $_GET['page'] : 1;
    $page = $_GET['page'] <= $total ? $_GET['page'] : 1;
   }
  else $page = 1;
  $offset = ($page -1) *$limit;
  $order = $getData_model->get_from_to('donhang',$offset,$limit,null,null);
  $orders=array();
  $temp=array();
  if(isset($order)){
    foreach ($order as $key => $value) {
      if (isset($trangthai)) {
        if ($trangthai==$value['trangthai']) {
          $kh = $getData_model->get_a_record('khachhang','makh',$value['makh']);
            if ($kh['matk']==null) {
            $temp['taikhoan']='chưa có';
            }else{
              $tk =$getData_model->get_a_record('taikhoan','matk',$kh['matk']);
              $temp['taikhoan']=$tk['taikhoan'];
            }
          $dh = $getData_model->get_all_record('chitietdh','madh',$value['madh']);
          $temp['ngaylap']=$value['ngaylap'];
          $temp['tenkh']=$kh['tenkh'];
          $temp['madh']=$dh;
          $temp['tonggia']=$value['tonggia'];
          $temp['trangthai']=$value['trangthai'];
          $orders[]=$temp;
          }
      }else{
      $kh = $getData_model->get_a_record('khachhang','makh',$value['makh']);
      if ($kh['matk']==null) {
        $temp['taikhoan']='chưa có';
      }else{
        $tk =$getData_model->get_a_record('taikhoan','matk',$kh['matk']);
        $temp['taikhoan']=$tk['taikhoan'];
      }
      $dh = $getData_model->get_all_record('chitietdh','madh',$value['madh']);
      $temp['ngaylap']=$value['ngaylap'];
      $temp['tenkh']=$kh['tenkh'];
      $temp['madh']=$dh;
      $temp['tonggia']=$value['tonggia'];
      $temp['trangthai']=$value['trangthai'];
      $orders[]=$temp;
      }
    }
    rsort($orders);
  }
   $pagination = pagination($url,$page,$total);
   require('view/order/index.php');
   ?>