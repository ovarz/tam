<?php 
  $page='faq';
  $nav='F.A.Q';
  $navParent='';
  $login='no';
  $arrPageList = require ('../inc/base.php')
?>
<?php require ($_SERVER['TAM'].'inc/sample.php')?>
<?php require ($_SERVER['TAM'].'inc/meta.php')?>
<h1 class="hide">Job Report <?php echo $page; ?></h1>
<link rel="stylesheet" type="text/css" href="css/acmeticker.css?<?php echo $anticache; ?>"/>
<link rel="stylesheet" type="text/css" href="css/tiny-slider.css?<?php echo $anticache; ?>"/>
<style><?php require ($_SERVER['TAM'].'css/home.css')?></style>



<div class="rancak-container">
  <?php require ($_SERVER['TAM'].'inc/nav.php')?>
  <div class="rancak-content">
  
    <?php require ($_SERVER['TAM'].'inc/header.php')?>
	
	
	
	<section title="F.A.Q" class="section-default section-faq">
	  <?php $st_back='no'; $st_back_link=''; $st_icon='faq'; $st_label='F.A.Q'; require ($_SERVER['TAM'].'module/section-title.php')?>
	  <?php $search_class=''; $search_filter='no'; require ($_SERVER['TAM'].'module/section-search.php')?>
	  <div class="section-faq-list">
	    <?php for ($i=1; $i <= 10 ; $i++) { ?>
          <div class="sfl-box">
            <div class="sfl-row sfl-question">
			  <div class="sfl-column">Q</div>
			  <div class="sfl-column">:</div>
			  <div class="sfl-column">Saya ingin menambahkan user untuk perusahaan saya. Bagaimana caranya?</div>
			</div>
            <a title="Answer" class="sfl-row sfl-answer" href="faq/">
			  <div class="sfl-column">A</div>
			  <div class="sfl-column">:</div>
			  <div class="sfl-column">Anda dapat mengakses menu <b>System</b> > <b>User</b> > lalu klik <b>Add User</b></div>
			  <div class="sfl-column sfl-more"><?php require ($_SERVER['TAM'].'img/icon/right.svg')?></div>
			</a>
          </div>
		<?php } ?>
	  </div>
	</section>
	
  </div>
</div>



<script src="js/acmeticker.js"></script>
<script src="js/tiny-slider.js"></script>
<script><?php require ($_SERVER['TAM'].'js/home.js')?></script>
<?php require ($_SERVER['TAM'].'inc/footer.php')?>
<?php require ($_SERVER['TAM'].'inc/base-bottom.php')?>