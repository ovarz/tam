<?php 
  $page='home';
  $nav='Dashboard';
  $navParent='';
  $login='no';
  $arrPageList = require ('inc/base.php')
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
	
	
	
	<section title="Running Text" class="acme-news-ticker running-text">
	  <?php $st_back='no'; $st_back_link=''; $st_info='no'; require ($_SERVER['TAM'].'module/section-title.php')?>
	  
	  <div class="acme-news-ticker-box">
		<ul class="antb-list">
		  <?php for ($i=1; $i <= 10; $i++) { ?>
			<li>
			  <a title="Running Text" class="antb-link" href="home.php"><?php echo $random_title[array_rand($random_title)]; ?></a>
			</li>
		  <?php } ?>
		</ul>
	  </div>
	</section>
	
	
	
	<section title="Home Banner" class="home-banner">
      <div class="home-banner-container">
        <?php 
          $banner_array = array();
          $banner_array[]=array('banner_title'=>'Banner 1','banner_image'=>'slideshow-1','banner_href'=>'https://www.toyota.astra.co.id/home');
          $banner_array[]=array('banner_title'=>'Banner 2','banner_image'=>'slideshow-2','banner_href'=>'https://www.toyota.astra.co.id/home');
          $banner_array[]=array('banner_title'=>'Banner 3','banner_image'=>'slideshow-3','banner_href'=>'https://www.toyota.astra.co.id/home');
          $banner_array[]=array('banner_title'=>'Banner 4','banner_image'=>'slideshow-4','banner_href'=>'https://www.toyota.astra.co.id/home');
          $banner_array[]=array('banner_title'=>'Banner 5','banner_image'=>'slideshow-5','banner_href'=>'https://www.toyota.astra.co.id/home');
          foreach($banner_array as $banner_list){ 
        ?>
          <a title="<?php echo($banner_list['banner_title'])?>" class="home-banner-link flex_ori thumb-loading" href="<?php echo($banner_list['banner_href'])?>" target="_blank">
            <img alt="<?php echo($banner_list['banner_title'])?>" class="lazyload" 
			data-original="img/sample/<?php echo($banner_list['banner_image'])?>.jpg"/>
          </a>
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