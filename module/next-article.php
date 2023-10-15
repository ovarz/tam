<section aria-label="Next Article" class="section-container section-next-article">
  <a aria-label="Link_Title" title="Link_Title" class="btn next-article-button" href="detail.php">
    <div class="next-article-label">Artikel Selanjutnya :</div>
	<h2 class="next-article-title"><?php echo $random_title[array_rand($random_title)]; ?></h2>
	<div class="next-article-icon content_center"><?php require ($_SERVER['TAM'].'img/icon/next-article.svg')?></div>
  </a>
</section>