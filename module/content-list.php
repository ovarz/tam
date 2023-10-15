<div class="article-list">
  <div class="article-head">
    <?php if($show_origin == 'yes') { ?>
      <a aria-label="Link_Title" title="Link_Title" class="article-web-logo flex_ori thumb-loading" href="<?php echo $content_origin; ?>">
	    <?php if($content_type == 'article') { ?>
          <img alt="img_title" class="lazyload" data-original="img/logo-<?php echo $random_web[array_rand($random_web)]; ?>.png" />
		<?php } ?>
	    <?php if($content_type == 'video') { ?>
          <img alt="img_title" class="lazyload" data-original="img/logo-vlix.png" />
		<?php } ?>
      </a>
	<?php } ?>
    <div class="article-time">1 menit yang lalu</div>
  </div>
  
  <a aria-label="Link_Title" title="Link_Title" class="article-title" href="<?php echo $content_link?>" target="_blank">
    <h2><?php echo $random_title[array_rand($random_title)]; ?></h2>
  </a>
  
  <a aria-label="Link_Title" title="Link_Title" class="article-thumb flex_ori thumb-loading" href="<?php echo $content_link?>" target="_blank">
    <?php if($content_type == 'article') { ?>
      <img alt="img_title" class="lazyload" data-original="img/sample/sample-<?php echo rand(1,20); ?>.jpg" />
    <?php } ?>
    <?php if($content_type == 'video') { ?>
	  <iframe allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" class="lazyload dailymotion-player" frameborder="0" data-original="https://geo.dailymotion.com/player/x9vw3.html?video=x8mza1l&amp;actionInfo=false&amp;syndicationKey=273746&amp;dmPubtool=customembed-v2" title="Dailymotion video player - Jokowi Jajal LRT Jabodebek Produksi Pertama Indonesia" height="560" width="315"></iframe>
    <?php } ?>
  </a>
  
  <div class="article-desc">
    <?php echo $random_desc[array_rand($random_desc)]; ?>
	<a aria-label="Link_Title" title="Link_Title" class="article-readmore" href="detail.php">
	  <span>Selengkapnya</span>
	  <?php require ($_SERVER['TAM'].'img/icon/more.svg')?>
	</a>
  </div>
  
  <div class="topic-list">
    <?php for ($j=1; $j <= 2; $j++) { ?>
      <?php require ($_SERVER['TAM'].'module/topic-button.php')?>
	<?php } ?>
  </div>
  
  <?php require ($_SERVER['TAM'].'module/action-button.php')?>
  
  <div class="article-comment hide">
	<div class="fb-comments" data-width="100%" data-numposts="1" order_by="reverse_time" data-href="https://www.viva.co.id/portalpemilu"></div>
  </div>
</div>