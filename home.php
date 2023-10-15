<?php 
  $page='home';
  $nav='Dashboard';
  $navParent='';
  $login='no';
  $arrPageList = require ('inc/base.php')
?>
<?php require ($_SERVER['TAM'].'inc/meta.php')?>
<h1 class="hide">Job Report <?php echo $page; ?></h1>
<div class="rancak-container">
  <?php require ($_SERVER['TAM'].'inc/nav.php')?>
  <div class="rancak-content">
    <?php require ($_SERVER['TAM'].'inc/header.php')?>
  </div>
</div>
<?php require ($_SERVER['TAM'].'inc/footer.php')?>
<?php require ($_SERVER['TAM'].'inc/base-bottom.php')?>