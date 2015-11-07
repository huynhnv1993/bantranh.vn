<?php require('template/header.php'); ?>
<?php require('template/search.php');?>
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
                            <i class="fa fa-list-ol"></i> Sản phẩm
                        </li>
                    </ol>
                </div>
                </div>

			<div class="row">
                <div class="col-lg-12"><label><i class="fa fa-upload"></i> <a href="index.php?controller=product&action=add_product">Thêm sản phẩm</a></label></div>
                <div class="col-lg-12">
                    <h2>Bảng sản phẩm</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Mã loại</th>
                                    <th>Mã chất liệu</th>
                                    <th>Mã nhà cung cấp</th>
                                    <th>Kích thước</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng tồn</th>
                                    <th>Sửa sản phẩm</th>
                                    <th>Xóa sản phẩm</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php if($products!=null): ?>
     							<?php  foreach($products as $key => $value): ?>
     							<tr>
     								<td><?php echo $value['tensp'];?></td>
     								<td><a href="index.php?controller=product&action=detail_product&pid=<?php echo $value['masp']?>&amp;macl=<?php echo $value['macl'];?>&amp;mancc=<?php echo $value['mancc'];?>"><img src="../asset/img/product/<?php echo $value['masp']?>.jpg" alt="" width="50" height="50"/> </a></td>
     								<td><?php echo $value['maloai'];?></td>
     								<td><?php echo $value['macl'];?></td>
     								<td><?php echo $value['mancc'];?></td>
     								<td><?php echo $value['kichthuoc'];?></td>
     								<td><?php echo $value['dongia'];?></td>
     								<td><?php echo $value['slton'];?></td>
     								<td> <a href="index.php?controller=product&action=change&amp;masp=<?php echo $value['masp'];?>">Sửa</a></td>
     								<td><a href="index.php?controller=product&rule=delete&amp;masp=<?php echo $value['masp'];?>">Xóa</a></td>
     							</tr>
     							<?php endforeach ?>
   								<?php endif ?>
 							</tbody>
						</table>
                     </div>
                </div>
			</div>
			<!-- end row -->

		</div>
	</div>
</div>
<div class="panel-footer">
  <div class="text-center">
     <?php echo $pagination;
     //echo $a;?>
  </div>
</div>