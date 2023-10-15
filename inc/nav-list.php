<<?php if($contentLists['parent'] == 'no') { ?>a<?php } ?><?php if($contentLists['parent'] == 'yes') { ?>button<?php } ?>
  class="nav-list <?php if($navParent == $lists) { ?>nav-open<?php } ?> <?php if($nav == $contentLists['label']) { ?>nav-curr<?php } ?>
  <?php if($contentLists['parent'] == 'yes') { ?>nav-parent<?php } ?>"
  title="<?php echo $contentLists['label'] ?>" href="<?php echo $contentLists['link'] ?>">
  <div class="nav-icon"><?php require ($_SERVER['TAM'].'img/icon/menu-'.$contentLists['icon'].'.svg')?></div>
  <div class="nav-label"><?php echo $contentLists['label'] ?></div>
  <?php if($contentLists['parent'] == 'yes') { ?>
    <div title="Sub Navigation" class="nav-arrow-toogle content_center">
      <?php require ($_SERVER['TAM'].'img/icon/menu-parent.svg')?>
    </div>
  <?php } ?>
</<?php if($contentLists['parent'] == 'no') { ?>a<?php } ?><?php if($contentLists['parent'] == 'yes') { ?>button<?php } ?>>