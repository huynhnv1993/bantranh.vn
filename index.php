<?php session_start();?>
<?php require_once('librarys/include.php');?>
<?php require_once('librarys/makeObject.php');?>
<?php
// Khởi tạo một mã có 6 kí tự cho khách hàng
if(!isset($_SESSION['makh']))
{
$_SESSION['makh'] = getCustomerCode();
}

//Nhận request từ trình duyệt gửi đến controller và action tương ứng
if(isset($_GET['controller'])) $controller = $_GET['controller'];
else $controller = 'product';

if(isset($_GET['action'])) $action = $_GET['action'];
else $action = 'index';

$file = 'controller/'.$controller.'/'.$action.'.php';
if(file_exists($file))
	require($file);
else
	show_404();
mysql_close($db);

 ?>





