<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="signupLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" action="index.php?controller=sign&amp;action=signup" method="POST">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span></button>
          <h4 class="modal-title" id="signinLabel">Đăng Kí</h4>
        </div>
        <div class="modal-body">
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
        </div>
        <div class="modal-footer">
          <div class="form-group">
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            <button type="submit" name="submit" class="btn btn-primary">Đăng kí</button>
          </div>
        </div>
       </form>
    </div>
  </div>
</div>