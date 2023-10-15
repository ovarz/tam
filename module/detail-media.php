<div class="detail-media">
  <?php if($media_type == 'image') { ?>
    <div class="detail-media-frame <?php if($media_lazyload == 'yes') { ?>flex_ori thumb-loading<?php } ?>">
	  <?php if($media_lazyload == 'no') { ?>
		<picture>
          <source media="(min-width:1024px)" srcset="https://thumb.viva.co.id/media/frontend/thumbs3/2023/04/01/64284e5aa4859-arsenal-vs-leeds-united_1265_711.jpg">
          <source media="(min-width:568px)" srcset="https://thumb.viva.co.id/media/frontend/thumbs3/2023/04/01/64284e5aa4859-arsenal-vs-leeds-united_665_374.jpg">
          <source media="(min-width:320px)" srcset="https://thumb.viva.co.id/media/frontend/thumbs3/2023/04/01/64284e5aa4859-arsenal-vs-leeds-united_375_211.jpg" type="image/webp">
          <source media="(min-width:320px)" srcset="https://thumb.viva.co.id/media/frontend/thumbs3/2023/04/01/64284e5aa4859-arsenal-vs-leeds-united_375_211.jpg">
          <img alt="Arsenal vs Leeds United" src="https://thumb.viva.co.id/media/frontend/thumbs3/2023/04/01/64284e5aa4859-arsenal-vs-leeds-united_665_374.jpg">
		</picture>
	  <?php } ?>
	  <?php if($media_lazyload == 'yes') { ?>
        <img alt="img_title" class="lazyload" data-original="img/sample/sample-<?php echo rand(1,20); ?>.jpg" />
	  <?php } ?>
    </div>
	<div class="detail-media-origin">
	  <div class="dmo-label">Sumber foto :</div>
      <div class="detail-author-list dmo-list">
        <div class="detail-author-name">Soul as Three</div>
      </div>
	</div>
  <?php } ?>
</div>