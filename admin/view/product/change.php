<?php require('template/header.php') ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
			<div class="row">
                <div class="col-lg-12">
                	<h1 class="page-header">Sản phẩm</h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.php?controller=dashboard">Bảng điều khiển</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-list-ol"></i>  <a href="index.php?controller=product">Sản phẩm</a>
                        </li>
                        <li>
                        	<i class="fa fa-edit"></i>Thay đổi
                        </li>
                    </ol>
                </div>
            </div>
<?php if (isset($success)) :?>
            <div class="row">
                <div class="page-header"><?php echo '<em>'.$success.'</em>' ; $success=null;?></div>
            </div>
<?php endif?>
			<div class="row">
				<div class="col-lg-8">
					<form role="form" action="index.php?controller=product&action=change&masp=<?php echo $sp['masp'];?>" method="post">
						<div class="form-group">
                            <label>Hình ảnh</label>
                            <p><img src="../asset/img/product/<?php echo $sp['masp']?>.jpg" alt="" width="50" height="50"/><p>
                        </div>
                        <div class="form-group">
							<label>Tên Sản phẩm</label>
							<input class="form-control" type="text" name="tensanpham" value="<?php echo $sp['tensp'];?>" required="required">
                        </div>
                        <div class="form-group">
                            <label>Chất liệu:</label>
                            <select name="tencl">
                                <option selected value="<?php echo $tenchatlieu;?>"><?php echo $tenchatlieu;?></option>
                                <?php foreach ($chatlieu as $key => $value): ?>
                                <option value="<?php echo $value['tencl'];?>"><?php echo $value['tencl'];?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Loại sản phẩm:</label>
                            <select name="tenloai">
                                <option selected value="<?php echo $tenloaisp;?>"><?php echo $tenloaisp ;?></option>
                                <?php foreach ($loaisp as $key => $value): ?>
                                <option value="<?php echo $value['tenloai'];?>"><?php echo $value['tenloai'];?></option>
                                <?php endforeach ?>
                            </select>
						</div>
                        <div class="form-group">
                            <label>Nhà cung cấp:</label>
                            <select name="tenncc">
                                <option selected value="<?php echo $tenncc;?>"><?php echo $tenncc ;?></option>
                                <?php foreach ($ncc as $key => $value): ?>
                                <option value="<?php echo $value['tenncc'];?>"><?php echo $value['tenncc'];?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kích thước</label>
                            <input class="form-control" type="text" name="kichthuoc" value="<?php echo $sp['kichthuoc'];?> " required="required">
                        </div>
                        <div class="form-group">
                            <label>Đơn giá</label>
                            <input class="form-control" type="number" name="dongia" value="<?php echo $sp['dongia'];?>" required="required">
                        </div>
                        <div class="form-group">
                            <label>Số lượng tồn</label>
                            <input class="form-control" type="number" name="slton" value="<?php echo $sp['slton'];?>" required="required">
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea class="form-control" name="mota" rows="3"  required="required"><?php echo $sp['mota'];?></textarea>
                        </div>
                            <button type="submit" name="submit" class="btn btn-default">Sửa </button>
                            <button type="reset" class="btn btn-default">Làm mới </button>
					</form>
				</div>
			</div>
			<!-- end row -->
			<div class="row">

			</div>
		</div>
	</div>
</div>
