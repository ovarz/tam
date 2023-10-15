<div class="form-box <?php if($formError == 'yes') { ?>form-box-error<?php } ?>">
  <div class="form-box-container">
    <input class="form-box-field <?php if($formType == 'password') { ?>form-password-field<?php } ?>" required
	<?php if($formValue != '') { ?>value="<?php echo $formValue; ?>"<?php } ?>
	  <?php if($formType == 'default') { ?>type="text"<?php } ?>
	  <?php if($formType == 'password') { ?>type="password"<?php } ?>
	>
	<div class="form-box-title"><?php echo $formLabel; ?></div>
    <?php if($formType == 'password') { ?>
      <button title="Toggle Password" class="form-toggle-password show-pass content_center">
	    <?php require ($_SERVER['TAM'].'img/icon/pass-show.svg')?>
	    <?php require ($_SERVER['TAM'].'img/icon/pass-hide.svg')?>
	  </button>
    <?php } ?>
  </div>
  <?php if($formError == 'yes') { ?>
    <div class="form-box-note"><?php echo $formErrorLabel; ?></div>
  <?php } ?>
</div>