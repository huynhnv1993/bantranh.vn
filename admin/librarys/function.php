<?php
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
?>
