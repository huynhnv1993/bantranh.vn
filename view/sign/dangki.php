<?php require('template/header.php') ?>
<div class="container">
   <?php if(isset($erroup)): ?>
   <div class="row">
      <h4 class="text-danger" ><em><?php echo $erroup?></em></h4>
   </div>
   <?php endif ?>
   <div class="row">
      <div class="panel panel-info">
         <div class="panel-heading">
            <h3 class="panel-title">Đăng Kí</h3>
         </div>
         <div class="panel-body">
            <div class="col-md-4 col-md-offset-3">
               <form role="form" method="post" action="index.php?controller=sign&action=signup">
             <div class="form-group">
              <label for="username" class="control-label">Tài khoản:</label>
              <input type="text" name="username" class="form-control" id="username" placeholder="Điền tên tài khoản vào đây" required="required"/>
            </div>
            <div class="form-group">
              <label for="pass" class="control-label">Mật khẩu:</label>
              <input type="password" class="form-control" name="pass" id="pass" placeholder="Điền mật khẩu vào đây" required="required" />
            </div>
            <div class="form-group">
                  <label for="Fullname">Họ tên</label>
                  <input type="text" class="form-control" id="fullname" placeholder="Điền họ tên vào đây" name="fullname" required="required"/>
                  </div>
                  <div class="form-group">
                     <label for="address">Địa chỉ</label>
                     <input type="text" class="form-control" id="address" placeholder="Điền địa chỉ vào đây" name="addr" required="required"/>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">SĐT</label>
                     <input type="text" class="form-control" id="telephone" placeholder="Điền số điện thoại vào đây" name="tel" pattern ="[0-9]{10,11}" required="required"/>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Email </label>
                     <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Điền email vào đây" name="email" required="required"/>
                  </div>                        
                  <button type="submit" class="btn btn-default" name="submit">Đăng kí</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<?php require('template/footer.php') ?>