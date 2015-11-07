<?php require('template/header.php'); ?>
<div class="container">
   	<div class="row">
    		<div class="panel panel-info">
         		<div class="panel-heading">
            		<h3 class="panel-title"><i class="glyphicon glyphicon-user"></i>&nbspThông tin tài khoản</h3>
         		</div>
        	<div class="panel-body">
          		<div class="col-md-8">
              <div>
					<div class="row">
				      	<div class="col-md-3"><label><strong>Tài Khoản :</strong></label></div>
				      	<div class="col-md-4"><?php echo $account['taikhoan'] ?></div>
				   	</div>
					<div class="row">
				      	<div class="col-md-3"><label><strong>Cấp độ :</strong></label></div>
				      	<div class="col-md-4"><?php echo $account['capdo'] ?></div>
				   	</div>           		
					<div class="row">
				      	<div class="col-md-3"><label><strong>Họ Tên :</strong></label></div>
				      	<div class="col-md-4"><?php echo $user['tenkh'] ?></div>
				   	</div>
				   	<div class="row">
				    	<div class="col-md-3"><label><strong>Email :</strong></label></div>
				      	<div class="col-md-4"><?php echo $user['email'] ?></div>
				   	</div>
				   	<div class="row">
				      	<div class="col-md-3"><label><strong>Địa chỉ :</strong></label></div>
				      	<div class="col-md-4"><?php echo $user['diachi'] ?></div>
				   	</div>
				   	<div class="row">
				      	<div class="col-md-3"><label><strong>SĐT :</strong></label></div>
				      	<div class="col-md-4"><?php echo $user['sdt'] ?></div>
				   	</div> 
            </div>
            <div>
                <a href="#" data-toggle="modal" data-target="#updateuser">
                 Cập nhật
                </a>
            </div>    
          		</div>
         	</div>
      	</div>
    		<div class="panel panel-info">
         		<div class="panel-heading ">
            		<h3 class="panel-title"><i class="glyphicon glyphicon-retweet"></i>&nbspGiao dịch</h3>
         		</div>
         		<table class="table table-striped table-hover">
         			<tr>
         				<td><strong>Ngày</strong></td>
         				<td><strong>Sản phẩm</strong></td>
         				<td><strong>Hình ảnh</strong></td>
         				<td><strong>Số lượng</strong></td>
         				<td><strong>Tình trạng</strong></td>
         			</tr>
          			<?php
                  while ($i<$leng) {
                    echo '<tr>';
                    echo '<td>'.$ngaylap[$i].'</td>';
                    echo '<td>'.$tensp[$i].'</td>';
                    echo '<td>'.'<image src="'.$image[$i].'" style="max-width:50px; max-height:50px;" />'.'</td>';
                    echo '<td>'.$soluong[$i].'</td>';
                    echo '<td>'.$trangthai[$i].'</td>';
                    echo '</tr>';
                    $i++;
                  }
          			?>
				</table>		     
      		</div>  	
   	</div>
</div>


<?php require('template/footer.php');?>