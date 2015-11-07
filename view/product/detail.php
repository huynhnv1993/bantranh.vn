<?php require('template/header.php') ;?>
<div class="container">
   <div class="row">
      <div class="col-md-2">
         <div class="row"><?php require('template/theme.php');?></div>
         <div class="row"> <?php require('template/material.php');?></div>
         <div class="row"><?php require('template/provider.php');?></div>
      </div>

      <div class="col-md-10">
         <div class="panel panel-success ">
   <div class="panel-heading">
      <h3 class="panel-title">Chi tiết sản phẩm</h3>
   </div>
   <div class="panel-body">
   		<table>
   			<tr>
   				<td>
   					<img src="asset/img/product/<?php echo $pid?>.jpg" alt="" width="300" height="300"/>
   				</td>
               <td style="width:20px"></td>
   				<td>
	   				<table style="font-size:18px">
	   					<tr>
	   						<td><strong>Tên: </strong></td>
	   						<td><?php echo '<p>'.$detail_product['tensp'].'</p>'?></td>
	   					</tr>
	   					<tr>
	   						<td><strong>Loại: </strong></td>
	   						<td><?php echo '<p>'.$detail_product_loaisp['tenloai'].'</p>'?></td>
	   					</tr>
	   					<tr>
	   						<td><strong>Kích thước: </strong></td>
	   						<td><?php echo'<p>'.$detail_product['kichthuoc'].'</p>' ?></td>
	   					</tr>
	   					<tr>
	   						<td><strong>Chất liệu: </strong></td>
	   						<td><?php echo '<p>'.$detail_product_chatlieu['tencl'].'</p>'?></td>
	   					</tr>
	   					<tr>
	   						<td><strong>Nhà cung cấp: </strong></td>
	   						<td><?php echo '<p>'.$detail_product_ncc['tenncc'].'</p>'?></td>
	   					</tr>
	   					<tr>
	   						<td><strong>Tình trạng: </strong></td>
	   						<td><?php echo '<p>'.$tinhtrang.'</p>'?></td>
	   					</tr>
	   				</table>
   				</td>
   			</tr>

   			<tr>
   				<td><br><a class="btn btn-warning" href="index.php?controller=cart&amp;action=add&amp;pid=<?php echo $pid ;?>"><i class="glyphicon glyphicon-shopping-cart"></i>Thêm Vào Giỏ</a></td>
   			</tr>
   		</table>
   </div>
   <div class="panel-footer">
      <div class="text-center">
      
      </div>
   </div>
</div>
      </div>
   </div>
</div>
<?php require('template/footer.php')?>