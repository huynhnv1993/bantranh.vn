<div class="panel panel-info">
   <div class="panel-heading theme">
      <h3 class="panel-title"><i class="glyphicon glyphicon-th-list"></i>
         &nbsp;
         Chủ Đề
         <b class="glyphicon glyphicon-plus-sign visible-xs pull-right"></b>
      </h3>
   </div>
   <div class="panel-body ">
      <div class="theme-list hidden-xs">
         <?php if(!empty($themes)): ?>
         <?php foreach($themes as $key => $value): ?>
         <h5>
         <a href="index.php?controller=product&amp;maloai=<?php echo $value['maloai']?>"><i class="glyphicon glyphicon-asterisk panel_icon"></i><strong class="panel_title"><?php echo $value['tenloai']?></strong></a>
         </h5>
         <?php endforeach ?>
         <?php endif ?>
      </div>
   </div>
</div>