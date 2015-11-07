<?php require('template/header.php'); ?>

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
			<div class="row">
                <div class="col-lg-12">
                	<h1 class="page-header">Người dùng</h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.php?controller=dashboard">Bảng điều khiển</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-reddit"></i> Người dùng
                        </li>
                    </ol>
                </div>
                </div>

			<div class="row">
                <div class="col-lg-12">
                    <h2>Bảng người dùng</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Họ tên</th>
                                    <th>Tài Khoản</th>
                                    <th>Cấp độ</th>
                                    <th>Kích hoạt</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Phân cấp</th>
                                    <th>Xóa tài khoản</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php 
                                if(isset($users)){
									foreach ($users as $key => $value) {
										$users_ten=$getData_model->get_a_record('khachhang','matk',$value['matk']);
								?>

                            
                                <tr>
                                    <td><?php echo $users_ten['tenkh'] ;?></td>
                                    <td><?php echo $value['taikhoan']; ?></td>
                                    <td><?php echo $value['capdo'] ;?></td>
                                    <td><?php echo $value['kichhoat']; ?></td>
                                    <td><?php echo $users_ten['sdt']; ?></td>
                                    <td><?php echo $users_ten['email']; ?></td>
                                    <td><?php if($value['capdo']=='normal'): ?>
                                    	<a href="index.php?controller=user&rule=up&user=<?php echo $value['taikhoan'];?>">Lên cấp</a>
                                    	<?php endif ?>
                                    	<?php if($value['capdo']=='admin'): ?>
                                    	<a href="index.php?controller=user&rule=down&user=<?php echo $value['taikhoan'];?>">Hạ cấp</a>
                                    	<?php endif ?>
                                    </td>
                                    <td><a href="index.php?controller=user&rule=delete&user=<?php echo $value['taikhoan'];?>">Xóa</a></td>
                                </tr>
								<?php }	}?>
 							</tbody>
						</table>
                     </div>
                </div>
			</div>
			<!-- end row -->
			<div class="row">
				<div class="col-lg-12">
					<h2>Bảng khách hàng</h2>
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Họ tên</th>
									<th>Địa chỉ</th>
									<th>Số điện thoại</th>
									<th>Email</th>
								</tr>
							</thead>
							<tbody>
								<?php
                                if(isset($customer)){ 
									foreach ($customer as $key => $value) {
										?>
								<tr>
									<td><?php echo $value['tenkh']; ?></td>
									<td><?php echo $value['diachi']; ?></td>
									<td><?php echo $value['sdt']; ?></td>
									<td><?php echo $value['email']; ?></td>
								</tr>
									

								<?php
								    }	}
								 ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>