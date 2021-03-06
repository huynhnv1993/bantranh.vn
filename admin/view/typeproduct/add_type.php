<?php require('template/header.php') ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Loại sản phẩm</h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.php?controller=dashboard">Bảng điều khiển</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-list-ol"></i>  <a href="index.php?controller=typeproduct">Loại sản phẩm</a>
                        </li>
                        <li>
                            <i class="fa fa-upload"></i>Thêm loại sản phẩm
                        </li>
                    </ol>
                </div>
            </div>
<?php if (isset($success)) :?>
            <div class="row">
                <div class="page-header"><?php echo '<em>'.$success.'</em>' ; $success=null;?></div>
            </div>
<?php endif?>
            <div class="row">
                <div class="col-lg-6">
                    <form role="form" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Mã loại sản phẩm</label>
                            <input class="form-control" type="text" name="maloai" placeholder="tối đa 6 kí tự example: DTxxxx" pattern ="{6}">
                        </div>
                        <div class="form-group">
                            <label>-Tên loại sản phẩm</label>
                            <input class="form-control" type="text" name="tenloai" value="<?php echo $type['tenloai']?>" required="required">
                        </div>
                            <button type="submit" name="submit" class="btn btn-default">Thêm </button>
                            <button type="reset" class="btn btn-default">Làm mới </button>
                    </form>
                </div>
            </div>
            <!-- end row -->
            <div class="row">

            </div>
        </div>
    </div>
</div>
