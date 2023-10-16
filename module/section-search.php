<section title="Search" class="section-search <?php echo $search_class; ?>">
  <input class="section-search-field" type="text" placeholder="Insert Keyword.....">
  <?php if($search_filter == 'yes') { ?>
    <button title="Filter" class="section-search-filter content_center">
      <?php require ($_SERVER['TAM'].'img/icon/filter.svg')?>
    </button>
  <?php } ?>
  <button title="Submit Search" class="btn section-search-button">
    Search
  </button>
</section>