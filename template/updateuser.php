<div class="modal fade" id="updateuser" tabindex="-1" role="dialog" aria-labelledby="updateLable" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" action="index.php?controller=user" method="POST">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span></button>
          <h4 class="modal-title" id="updateLable">Cập nhật</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
                  <label for="Fullname">Họ tên</label>
                  <input type="text" class="form-control" id="fullname" value="<?php echo $_SESSION['fullname'];?>" name="fullname" required="required"/>
                  </div>
                  <div class="form-group">
                     <label for="address">Địa chỉ</label>
                     <input type="text" class="form-control" id="address" value="<?php echo $_SESSION['addr'];?>" name="addr" required="required"/>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">SĐT</label>
                     <input type="text" class="form-control" id="telephone" value="<?php echo $_SESSION['tel'];?>" name="tel" pattern ="[0-9]{10,11}" required="required"/>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Email </label>
                     <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $_SESSION['email'];?>" name="email" required="required"/>
                  </div>                        
        </div>
        <div class="modal-footer">
          <div class="form-group">
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            <button type="submit" name="submit" class="btn btn-primary">Cập nhật</button>
          </div>
        </div>
       </form>
    </div>
  </div>
</div>