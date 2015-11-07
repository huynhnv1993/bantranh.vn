<div class="panel panel-info">
   <div class="panel-heading provider">
      <h3 class="panel-title"><i class="glyphicon glyphicon-th-list"></i>
         &nbsp;
         Nhà Sản Xuất
         <b class="glyphicon glyphicon-plus-sign visible-xs pull-right"></b>
      </h3>
   </div>
   <div class="panel-body ">
      <div class="provider-list hidden-xs provider">
         <?php if(!empty($provider)): ?>
         <?php foreach($provider as $key => $value): ?>
         <h5>
         <a href="index.php?controller=product&amp;ncc=<?php echo $value['mancc']?>" ><i class="glyphicon glyphicon-asterisk panel_icon"></i><strong class="panel_title"><?php echo $value['tenncc']?></strong></a>
         </h5>
         <?php endforeach ?>
         <?php endif ?>
      </div>
   </div>
</div>