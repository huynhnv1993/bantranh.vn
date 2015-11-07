<?php
date_default_timezone_set('Etc/UTC');
//Trả về 1 mã có 6 kí tự.
function getCustomerCode(){
$str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
$length = 6;
for($s ='', $i =0, $z = strlen($str)-1; $i<$length; $x = rand(0,$z),$s.=$str[$x],$i++);
return $s;
}
//Lấy về 1 chuỗi 11 kĩ tự là thời gian hiện tại
function getOrderCode(){
return time();
}
/**
* Chuyển hướng đến trang báo lỗi 404
*/
function show_404(){
header('HTTP/1.1 Not Found 404', true, 404);
require(BASEPATH.'404.php');
exit();
}
/**
* Chống SQL Inject
* @param  string
* @return string
*/
function escape($str) {
return mysql_real_escape_string($str);
}
//Phân trang
function pagination($url, $page, $total){
$adjacents = 2;
$prevlabel = "&lsaquo; Trước";
$nextlabel = "Tiếp &rsaquo;";
$out = '
<ul class="pagination">
   ';
   //first
   if ($page == 1) {
   $out.= '
   <li class="disabled"><span>Đầu</span></li>
   ';
   } else {
   $out.='
   <li><a href="'.$url.'">Đầu</a></li>
   ';
   }
   // previous
   if ($page == 1) {
   $out.= '
   <li class="disabled"><span>&Lt;</span></li>
   ';
   } elseif ($page == 2) {
   $out.='
   <li><a href="'.$url.'">&Lt;</a></li>
   ';
   } else {
   $out.='
   <li><a href="'.$url.'&amp;page='.($page - 1).'">&Lt;</a></li>
   ';
   }
   $pmin=($page>$adjacents)?($page - $adjacents):1;
   $pmax=($page<($total - $adjacents))?($page + $adjacents):$total;
   for ($i = $pmin; $i <= $pmax; $i++) {
   if ($i == $page) {
   $out.= '
   <li class="active"><span>'.$i.'</span></li>
   ';
   } elseif ($i == 1) {
   $out.= '
   <li><a href="'.$url.'">'.$i.'</a></li>
   ';
   } else {
   $out.= '
   <li><a href="'.$url. "&amp;page=".$i.'">'.$i. '</a></li>
   ';
   }
   }
   // next
   if ($page < $total) {
   $out.= '
   <li><a href="'.$url.'&amp;page='.($page + 1).'">&Gt;</a></li>
   ';
   } else {
   $out.= '
   <li class="disabled"><span>&Gt;</span></li>
   ';
   }
   //last
   if ($page < $total) {
   $out.= '
   <li><a href="'.$url.'&amp;page='.$total.'">Cuối</a></li>
   ';
   } else {
   $out.= '
   <li class="disabled"><span>Cuối</span></li>
   ';
   }
   $out.= '
</ul>
';
return $out;
}


function strU($str){
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
    $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
    $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
    $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
    $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
    $str = preg_replace("/(đ)/", 'd', $str);
    $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
    $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
    $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
    $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
    $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
    $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
    $str = preg_replace("/(Đ)/", 'D', $str);
    $str = preg_replace("/[^A-Za-z0-9 ]/", '', $str);
    $str = preg_replace("/\s+/", ' ', $str);
    $str = trim($str);
    $str = strtolower($str);
    return $str;
}




function sendmail($to,$name,$subject,$body)
{

//Khoi tao doi tuong
$mail = new PHPMailer();
//Dung SMTP
$mail->isSMTP();

/*Chu y phan cau hinh SMTP cua google*/
//Server SMTP
$mail->Host = "smtp.gmail.com";
//Port SMTP
$mail->Port = 465;
//Ma hoa - ssl (deprecated) or tls
$mail->SMTPSecure = 'ssl';
//Chung thuc SMTP
$mail->SMTPAuth = true;

/*Noi dung can chinh sua, tai khoan gmail, password, nguoi gui, nguoi nhan*/
//Username - Email
$mail->Username = "bantranh.vn@gmail.com";
//Password cua email
$mail->Password = "dmconthanh";
/*Het phan cau hinh*/

/*Cau hinh header*/

//Nguoi gui
$mail->setFrom('no-reply@gmail.com','Ad hoangtuan' );
//Nguoi nhan
$mail->addAddress($to,$name);

/*End noi dung can chinh sua*/

/*Noi dung email*/
//Tieu de
$mail->Subject =$subject;

$mail->CharSet = 'UTF-8';
//Noi dung
$mail->Body    = $body;

//Gui mail va tra ve thong bao
if (!$mail->send()) {
    return $mail->ErrorInfo;
} else {
    return false;
}
}

?>
