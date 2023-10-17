<?php 
  $page='home';
  $nav='Dashboard';
  $navParent='';
  $arrPageList = require ('inc/base.php')
?>
<?php require ($_SERVER['TAM'].'inc/meta.php')?>
<h1 class="hide">Job Report <?php echo $page; ?></h1>
<style><?php require ($_SERVER['TAM'].'css/login.css')?></style>



<div class="rancak-login content_center">

  <div class="rancak-login-box">
    <div class="rlb-logo content_center">
	  <div class="toyota-logo rlb-logo-frame flex_ori thumb-loading">
	    <img alt="Logo Toyota" class="lazyload" data-original="img/logo-toyota.png">
	  </div>
	</div>
	<?php $formType='default'; $formLabel='username'; $formValue=''; $formError='no'; $formErrorLabel=''; 
	require ($_SERVER['TAM'].'module/form.php')?>
	<?php $formType='password'; $formLabel='password'; $formValue=''; $formError='no'; $formErrorLabel=''; 
	require ($_SERVER['TAM'].'module/form.php')?>
	<div class="rlb-captcha content_center">Captcha Here</div>
	<div class="rlb-other">
	  <div class="rlb-remember">
	    <input class="rlb-real" name="choice" type="checkbox">
		<div class="rlb-remember-box content_center">
		  <?php require ($_SERVER['TAM'].'img/icon/check.svg')?>
		</div>
		<div class="rlb-remember-label">Remember Me</div>
	  </div>
	  <div class="rlb-forgot">
	    <a title="Forgot Password" class="rlb-forgot-link content_center" href="forgot.php">Forgot Password</a>
	  </div>
	</div>
	<button title="Login" class="btn rlb-button" onclick="location.href='home.php';">Login</button>
  </div>
  
</div>



<?php require ($_SERVER['TAM'].'inc/footer.php')?>
<?php require ($_SERVER['TAM'].'inc/base-bottom.php')?>