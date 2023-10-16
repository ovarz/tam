<<?php if($st_back == 'no') { ?>div<?php } ?><?php if($st_back == 'yes') { ?>a title="<?php echo $st_label; ?>" href="<?php echo $st_back_link; ?>"<?php } ?> 
class="section-title">
  <?php if($st_back == 'no') { ?>
    <?php require ($_SERVER['TAM'].'img/icon/menu-'.$st_icon.'.svg')?>
  <?php } ?>
  <?php if($st_back == 'yes') { ?>
    <?php require ($_SERVER['TAM'].'img/icon/back.svg')?>
  <?php } ?>
  <div class="section-title-label"><?php echo $st_label; ?></div>
</<?php if($st_back == 'no') { ?>div<?php } ?><?php if($st_back == 'yes') { ?>a<?php } ?>>