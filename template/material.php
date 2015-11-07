<div class="panel panel-info">
   <div class="panel-heading material">
      <h3 class="panel-title"><i class="glyphicon glyphicon-th-list"></i>
         &nbsp;
         Chất Liệu
         <b class="glyphicon glyphicon-plus-sign visible-xs pull-right"></b>
      </h3>
   </div>
   <div class="panel-body material">
      <div class="hidden-xs material-list">
         <?php if(!empty($materials)): ?>
         <?php foreach($materials as $key => $value): ?>
         <h5>
         <a href="index.php?controller=product&amp;chatlieu=<?php echo $value['macl']?>" ><i class="glyphicon glyphicon-asterisk panel_icon"></i><strong class="panel_title"><?php echo $value['tencl']?></strong></a>
         </h5>
        <?php endforeach ?>
         <?php endif ?>
      </div>
   </div>
</div>