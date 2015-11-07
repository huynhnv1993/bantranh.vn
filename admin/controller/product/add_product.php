<?php
	$active="product";
	$masp=$tensp=$kichthuoc=$slton=$dongia=$mota='';
if (isset($_POST['submit'])) {
	$target_dir=".././asset/img/product/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $ok = "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $error= "File is not an image.";
        $uploadOk = 0;
    }
	// Check if file already exists
	if (file_exists($target_file)) {
	    $error= "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	    $error= "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    $error= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    $error= $error. "! Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	        $success1= 'Thành công';
	    } else {
	        $error= "Sorry, there was an error uploading your file.";
	    }
	}
	$tmp = basename($_FILES['fileToUpload']['name']);
	$type = substr(strrchr($tmp, "."), 1);
	$masp = substr($tmp, 0 ,strlen($tmp)-strlen($type)-1);
	$tensp=$_POST['tensp'];
	$loaisp=$_POST['tenloai'];
	$chatlieu=$_POST['tencl'];
	$ncc=$_POST['tenncc'];
	$kichthuoc=$_POST['kichthuoc'];
	$dongia=$_POST['dongia'];
	$slton=$_POST['slton'];
	$mota=$_POST['mota'];
	$maloai=$getData_model->get_a_record('loaisp','tenloai',$loaisp);
	$maloai1=$maloai['maloai'];		$tmp = basename($_FILES['fileToUpload']['name']);
	$type = substr(strrchr($tmp, "."), 1);
	$masp = substr($tmp, 0 ,strlen($tmp)-strlen($type)-1);
	$tensp=$_POST['tensp'];
	$loaisp=$_POST['tenloai'];
	$chatlieu=$_POST['tencl'];
	$ncc=$_POST['tenncc'];
	$kichthuoc=$_POST['kichthuoc'];
	$dongia=$_POST['dongia'];
	$slton=$_POST['slton'];
	$mota=$_POST['mota'];
	$maloai=$getData_model->get_a_record('loaisp','tenloai',$loaisp);
	$maloai1=$maloai['maloai'];
	if (isset($success1)&&$success1=='Thành công') {
		foreach ($chatlieu as $key => $value) {
			$macl=$getData_model->get_a_record('chatlieu','tencl',$value);
			$macl1=$macl['macl'];
			foreach ($ncc as $key => $value1) {
				$mancc=$getData_model->get_a_record('ncc','tenncc',$value1);
				$mancc1=$mancc['mancc'];
				$sanpham = array('masp'=>$masp, 'maloai'=>$maloai1,'macl'=>$macl1, 'mancc'=>$mancc1,'kichthuoc'=>$kichthuoc, 'dongia'=>$dongia,'slton'=>$slton,'tensp'=>$tensp);
				$getData_model->save('sanpham',$sanpham);
		
			}
		}
		$success="Thêm sản phẩm thành công!";
	}

}
	$loaisp=$getData_model->get_all('loaisp');
	$chatlieu=$getData_model->get_all('chatlieu');
	$ncc=$getData_model->get_all('ncc');
require('view/product/add_product.php');
 ?>