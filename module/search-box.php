<div class="search-box">
  <input class="search-field" name="" type="text" placeholder="Masukkan kata.....">
  <button title="Cari" class="btn search-button content_center" onclick="location.href='<?php echo $search_page; ?>';">
    <?php if($search_button == 'label') { ?>
      <span>Cari</span>
    <?php } ?>
    <?php if($search_button == 'icon') { ?>
      <?php require ($_SERVER['TAM'].'img/icon/search.svg')?>
    <?php } ?>
  </button>
</div>