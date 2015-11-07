<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="."><i class="glyphicon glyphicon-picture"></i> Thế giới Tranh</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav navbar-right">
            <li>
               <p class="navbar-text" class="caret">Xin Chào <?php echo $sign_model->checkUserFirst($_SESSION['makh'])? '' : 'khách'; ?></p>
            </li>
            <?php if(!$sign_model->checkUserFirst($_SESSION['makh'])):?>
            <li>
                 <a href="" data-toggle="modal" data-target="#signin">
                 Đăng nhập
                </a>
            </li>
            <li>
               <a href="" data-toggle="modal" data-target="#signup">
                 Đăng kí
                </a>
            </li>
            <?php else: ?>
            <li class="dropdown">
               <a href="" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username'];?>&nbsp;<i class="glyphicon glyphicon-cog"></i></a>
               <ul class="dropdown-menu" role="menu">
                <?php if(isset($_SESSION['capdo'])){if($_SESSION['capdo']=='admin'){?>
                  <li><a href="./admin/index.php"><i class="glyphicon glyphicon-heart">&nbsp</i>Quản lý</a></li>
                <?php }}?>
                  <li><a href="index.php?controller=user"><i class="glyphicon glyphicon-user">&nbsp</i>Thông tin tài khoản</a></li>
                  <li><a href="index.php?controller=sign&amp;action=logout"><i class="glyphicon glyphicon-off">&nbsp</i>Đăng xuất</a></li>
               </ul>
            </li>
            <?php endif ?>
         </ul>
         <ul class="nav navbar-nav">
           <li><a href="index.php?controller=guider">Hướng dẫn mua hàng</a></li>
         </ul>
      </div>
      <!-- /.navbar-collapse -->
   </div>
   <!-- /.container -->
</nav><!-- Navigation -->
