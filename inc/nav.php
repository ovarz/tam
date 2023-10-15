<nav>
  <?php foreach($arrPageList as $lists => $contentLists): ?>
    <div class="nav-box">
      <?php require ($_SERVER['TAM'].'inc/nav-list.php')?>
	  <?php if($contentLists['parent'] == 'yes') { ?>
        <div class="nav-sub" <?php if($navParent == $lists) { ?>style="display:block;"<?php } ?>>
          <?php foreach($contentLists['subnav'] as $contentLists):?>
            <?php require ($_SERVER['TAM'].'inc/nav-list.php')?>
          <?php endforeach; ?>
        </div>
	  <?php } ?>
    </div>
  <?php endforeach; ?>
</nav>