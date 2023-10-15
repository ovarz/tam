<div class="article-button-list">
  <div class="abl-left">
    <button title="Up Vote" class="article-button article-vote content_center">
      <?php require ($_SERVER['TAM'].'img/icon/vote-up.svg')?>
      <span>0.0M</span>
    </button>
    <button title="Down Vote" class="article-button article-vote content_center">
      <?php require ($_SERVER['TAM'].'img/icon/vote-down.svg')?>
      <span>0.0K</span>
    </button>
  </div>
  <div class="abl-right">
    <button title="Bookmark" data-title="<?php echo $bookmark_button?>" 
    class="article-button article-bookmark open-sticky content_center toggle-bookmark">
      <?php require ($_SERVER['TAM'].'img/icon/bookmark-outline.svg')?>
      <?php require ($_SERVER['TAM'].'img/icon/bookmark-solid.svg')?>
    </button>
    <?php if($page != 'detail') { ?>
      <button title="Comment" class="article-button article-button-comment content_center">
        <?php require ($_SERVER['TAM'].'img/icon/comment.svg')?>
      </button>
	<?php } ?>
    <?php if($page == 'detail') { ?>
      <a aria-label="Comment" title="Comment" class="article-button content_center" href="detail.php#comment">
        <?php require ($_SERVER['TAM'].'img/icon/comment.svg')?>
      </a>
	<?php } ?>
    <button title="Share" class="article-button article-share open-sticky content_center">
      <?php require ($_SERVER['TAM'].'img/icon/share.svg')?>
    </button>
  </div>
</div>