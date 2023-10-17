<<?php if($st_back == 'no') { ?>div<?php } ?><?php if($st_back == 'yes') { ?>a title="<?php echo $nav; ?>" href="<?php echo $st_back_link; ?>"<?php } ?> 
class="section-title">
  <?php if($st_back == 'no') { ?>
    <?php require ($_SERVER['TAM'].'img/icon/menu-'.$page.'.svg')?>
  <?php } ?>
  <?php if($st_back == 'yes') { ?>
    <?php require ($_SERVER['TAM'].'img/icon/back.svg')?>
  <?php } ?>
  <div class="section-title-label"><?php echo $nav; ?></div>
  <?php if($st_info == 'yes') { ?>
    <button title="Tooltip" class="section-title-info">
	  <?php require ($_SERVER['TAM'].'img/icon/tooltip.svg')?>
	</button>
  <?php } ?>
</<?php if($st_back == 'no') { ?>div<?php } ?><?php if($st_back == 'yes') { ?>a<?php } ?>>