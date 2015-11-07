<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="signinLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" action="index.php?controller=sign&amp;action=signin" method="POST">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span></button>
          <h4 class="modal-title" id="signinLabel">Đăng Nhập</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="username" class="control-label">Tài khoản:</label>
              <input type="text" name="username" class="form-control" id="username" required="required" placehholder="Điền tài khoản vào đây"/>
            </div>
            <div class="form-group">
              <label for="pass" class="control-label">Mật khẩu:</label>
              <input type="password" class="form-control" name="pass" id="pass" required="required" placehholder="Điền mật khẩu vào đây"/>
            </div>
        </div>
        <div class="modal-footer">
          <div class="form-group">
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            <button type="submit" name="submit" class="btn btn-primary">Đăng nhập</button>
          </div>
        </div>
       </form>
    </div>
  </div>
  </div>