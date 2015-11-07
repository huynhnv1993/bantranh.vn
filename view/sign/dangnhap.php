<?php require('template/header.php') ?>
<div class="container">
   <?php if(isset($erroin)): ?>
   <div class="row">
      <h4 class="text-danger" ><em><?php echo $erroin?></em></h4>
   </div>
  <?php endif ?>
   <div class="row">
      <div class="panel panel-info">
         <div class="panel-heading">
            <h3 class="panel-title">Ðăng Nhập</h3>
         </div>
         <div class="panel-body">
          <div class="col-md-4 col-md-offset-3">
               <form role="form" method="post" action="index.php?controller=sign&action=signin">
             <div class="form-group">
              <label for="username" class="control-label">Tài khoản:</label>
              <input type="text" name="username" class="form-control" id="username" required="required" placehholder="Điền tài khoản vào đây"/>
            </div>
            <div class="form-group">
              <label for="pass" class="control-label">Mật khẩu:</label>
              <input type="password" class="form-control" name="pass" id="pass" required="required" placehholder="Điền mật khẩu vào đây"/>
            </div>
                  <button type="submit" class="btn btn-default" name="submit">Đăng nhập</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<?php require('template/footer.php') ?>