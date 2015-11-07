<!-- Hiển thị danh sách hóa đơn của user -->
<form id="cart_form" method="post" action="index.php?controller=cart&amp;action=send" role="form">
   <div class="col-md-8 col-sm-12">
      <h2>Thông tin đơn hàng</h2>
      <table class="table table-striped table-hover">
         <thead>
            <tr>
               <th class="hidden-xs">STT</th>
               <th class="hidden-xs">Ảnh</th>
               <th>Sản phẩm</th>
               <th>Giá</th>
               <th>Số lượng</th>
            </tr>
         </thead>
         <tbody>
            <?php
               $stt = 0;
               foreach ($cart as $pid => $product): 
               	$stt++;1
               ?>
            <tr>
               <td class="hidden-xs"><?php echo $stt;?></td>
               <td class="hidden-xs">
                  <?php
                     $image = 'asset/img/product/'.$pid.'.jpg';
                     if (is_file($image)) {
                                        echo '<image src="'.$image.'" style="max-width:50px; max-height:50px;" />';
                                    }
                                    ?>
               </td>
               <td>
                  <a href="index.php?controller=product&amp;action=detail&amp;pid=<?php echo $product['id'];?>"><?php echo $product['name'];?></a>
               </td>
               <td>
                  <?php echo number_format($product['price'],0,',','.'); ?>
               </td>
               <td>
                  <?php echo $product['number'];?>
               </td>
            </tr>
            <?php endforeach; ?>
         </tbody>
         <tfoot>
            <tr>
               <td colspan="5">Thành tiền : <?php echo number_format($cart_model->cart_total(),0,',','.'); ?> VNĐ</th>
            </tr>
         </tfoot>
      </table>
   </div>
   <div class="col-md-4 col-sm-12">
   <h2>Thông tin khách hàng</h2>
   <div class="row">
      <div class="col-md-4"><label>Họ Tên :</label></div>
      <div class="col-md-8"><?php echo $user['tenkh'] ?></div>
   </div>
   <div class="row">
      <div class="col-md-4"><label>Email :</label></div>
      <div class="col-md-8"><?php echo $user['email'] ?></div>
   </div>
   <div class="row">
      <div class="col-md-4"><label>Địa chỉ :</label></div>
      <div class="col-md-8"><?php echo $user['diachi'] ?></div>
   </div>
   <div class="row">
      <div class="col-md-4"><label>SĐT :</label></div>
      <div class="col-md-8"><?php echo $user['sdt'] ?></div>
   </div>
   <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Đặt hàng</button>
</form>
