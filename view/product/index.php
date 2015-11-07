<?php require('template/header.php') ;?>
<div class="container">
   <div class="row">
      <div class="col-md-2">
         <div class="row"><?php require('template/theme.php');?></div>
         <div class="row"> <?php require('template/material.php');?></div>
         <div class="row"><?php require('template/provider.php');?></div>
      </div>

      <div class="col-md-10">
         <?php require('view/product/show_product.php') ;?>
      </div>
   </div>
</div>
<?php require('template/footer.php')?>