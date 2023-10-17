<div class="default-box default-tab <?php echo $tab_class; ?>-tab">
  <?php foreach($tab_array as $tab_list){ ?>
    <a title="<?php echo($tab_list['tab_label'])?>" href="<?php echo($tab_list['tab_link'])?>"
	class="default-tab-link <?php if($tab_list['tab_curr'] == 'yes') { ?>default-tab-curr<?php } ?> content_center">
	  <?php echo($tab_list['tab_label'])?>
	</a>
  <?php } ?>
</div>