<div class="panel panel-success ">
   <div class="panel-heading">
      <h3 class="panel-title">Danh sách sản phẩm</h3>
   </div>
   <div class="panel-body">
      <?php if($products!=null): ?>
      <?php  foreach($products as $key => $value): ?>
      <div class="col-md-4">
         <div class="thumbnail">
            <a  href="index.php?controller=product&amp;action=detail_product&amp;pid=<?php echo $value['masp'] ?>"><img class="overimg" src="asset/img/product/<?php echo $value['masp']?>.jpg" alt="" width="220" height="220"/></a>
            <div class="caption info_sp">
            <div class="name_sp">
               <h4>
                  <a href="index.php?controller=product&amp;action=detail_product&amp;pid=<?php echo $value['masp'] ?>"><?php echo $value['tensp'] ?></a>
               </h4>
               </div>
               <h4>
                    <?php echo number_format($value['dongia'],0,',','.').'VND'; ?>
               </h4>
               <h5>Tình trạng: <em><?php echo $value['slton'] >0 ? 'Còn Hàng' : 'Hết Hàng'?></em></h5>
               <p>Đây là 1 kiểu tranh thêu có họa tiết nhỏ, đẹp mắt phù hợp với những căn phòng nhỏ</p>
               <p class="text-right">
                  <a class="btn btn-warning" href="index.php?controller=cart&amp;action=add&amp;pid=<?php echo $value['masp'] ;?>"><i class="glyphicon glyphicon-shopping-cart"></i>Thêm Vào Giỏ</a>
               </p>
            </div>
         </div>
      </div>
   
   <?php endforeach ?>
   <?php endif ?>
   </div>
   <div class="panel-footer">
      <div class="text-center">
         <?php echo $pagination?>
      </div>
   </div>
</div>